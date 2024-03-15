$("#botaoDeciduo").click(function () {
  $("#odontogramaPermanente").attr("class", "odontograma hidden")
  $("#odontogramaDeciduo").attr("class", "odontograma odontogram-deciduous")
  $(".checked").attr(
    "class",
    "modal-body modal-dente-odontograma border border-black hidden"
  )
  $("#carrosselProcedimentos").attr(
    "class",
    "carousel carousel-dark slide hidden"
  )
})

$("#botaoPermanente").click(function () {
  $("#odontogramaPermanente").attr("class", "odontograma")
  $("#odontogramaDeciduo").attr(
    "class",
    "odontograma odontogram-deciduous hidden"
  )
  $(".checked").attr(
    "class",
    "modal-body modal-dente-odontograma border border-black hidden"
  )
  $("#carrosselProcedimentos").attr(
    "class",
    "carousel carousel-dark slide hidden"
  )
})

$(document).ready(function () {
  var dataAtual = new Date()
  var dia = String(dataAtual.getDate()).padStart(2, "0")
  var mes = String(dataAtual.getMonth() + 1).padStart(2, "0")
  var ano = dataAtual.getFullYear()
  var hora = String(dataAtual.getHours() + dataAtual.getMinutes())
  var dataFormatada = ano + "-" + mes + "-" + dia + "-" + hora
  $("#carrosselProcedimentos").carousel({
    interval: false
  })

  $procedimentos = Array()
  $id_procedimento = Array()
  $("#select2").select2({
    width: "100%"
  })

  verificarAtualizacoes()

  $(".form-group").on("submit", function (event) {
    event.preventDefault()
    enviarProcedimentoRealizado(dataFormatada)
  })

  $(".dentes").click(function () {
    listarProcedimentos()
  })
})

function enviarProcedimentoRealizado(dataFormatada) {
  $payload = {
    id_pessoa: 1, // FAZER A LÓGICA PARA PEGAR O ID DO PACIENTE ATUAL
    id_procedimento: $("#select2").val(), // PEGA O VALOR DO ID DO PROCEDIMENTO1
    dataprocedimento: dataFormatada, // PEGA A DATA ATUAL
    detalheprocedimento: $("#textoObservacoes").val(), // PEGA O TEXTO ESCRITO NO CAMPO DE OBSERVAÇÕES
    id_dente: $(".checked > h4").attr("id")
  }

  $jsonData = JSON.stringify($payload)
  $.ajax({
    url: "/soulclinic/server/controllers/odontograma_controller.php",
    type: "POST",
    data: { data: $jsonData },
    success: function (response) {
      console.log(response)
      if (response == "") {
        try {
          Swal.fire({
            icon: "success",
            title: "Dados salvos com sucesso!",
            showConfirmButton: false,
            timer: 1500
          })
          verificarAtualizacoes()
        } catch (e) {
          console.log("Erro", e)
        }
      } else {
        Swal.fire({
          icon: "error",
          title: "Erro!",
          text: "Confirme o preenchimento dos dados",
          showConfirmButton: false,
          timer: 2000
        })
        // alert("Dados não foram enviados!")
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log("deu errado")
      console.error("Erro: ", textStatus, errorThrown)
      console.log(textStatus)
      console.log(jqXHR.responseText)
    }
  })
}

function listarProcedimentos() {
  $.ajax({
    url: "/soulclinic/server/controllers/odontograma_controller.php",
    type: "GET",
    dataType: "json",
    data: { action: "getProcedimentos" },
    success: function (response) {
      // console.log(response)
      try {
        if ($id_procedimento.length == 0) {
          // console.log(response)
          response.forEach(function (item) {
            $id_procedimento.push(item.id_procedimento)
            $("#select2").append(
              $("<option>", {
                value: item.id_procedimento,
                text: item.id_procedimento + " - " + item.desc_procedimento
              })
            )
          })
        } else {
          response.forEach(function (item) {
            $elemento = $.inArray(item.id_procedimento, $id_procedimento)
            if ($elemento == -1) {
              $id_procedimento.push(item.id_procedimento)
              $("#select2").append(
                $("<option>", {
                  value: item.id_procedimento,
                  text: item.id_procedimento + " - " + item.desc_procedimento
                })
              )
            }
          })
        }
      } catch (e) {
        console.log("Erro ao analisar JSON", e)
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.error("Erro: ", textStatus, errorThrown)
      console.log(textStatus)
      console.log(jqXHR.responseText)
    }
  })
}

function verificarAtualizacoes() {
  $.ajax({
    url: "/soulclinic/server/controllers/odontograma_controller.php",
    type: "GET",
    dataType: "json",
    data: { action: "getDentesProcedimento" },
    success: function (response) {
      try {
        response.forEach(function (item) {
          $procedimentos.push(item)
        })
        // console.log(response)
      } catch (e) {
        console.log("Erro ao analisar JSON", e)
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.error("Erro: ", textStatus, errorThrown)
      console.log(textStatus)
      console.log(jqXHR.responseText)
    }
  })
}
function getInfoProcedimentoDente(toothNumber) {
  $procedimentos.forEach(function (item) {
    if (toothNumber == item.numerodente) {
      var dataFormatada = item.dataprocedimento.replace(
        /(\d*)-(\d*)-(\d*).*/,
        "$3/$2/$1"
      )
      $("#carrosselProcedimentos").attr("class", "carousel carousel-dark slide")

      $(".carousel-inner").append(
        "<div class='carousel-item'><h6>" +
          dataFormatada +
          " - " +
          item.procedimento +
          "</h6><p>" +
          item.detalheprocedimento +
          "</p></div>"
      )
      $(".carousel-inner :first").attr("class", "carousel-item active")
    }
  })
}

$(".carousel-control-prev").on("click", function () {
  carouselHeigth = $(".carousel").height()
  $(this).css({
    top: calc(carouselHeigth / 2)
  })
})
$(".carousel-control-next").on("click", function () {
  carouselHeigth = $(".carousel").height()
})
// ##### ADICIONA O MODAL DE CADA DENTE AO CLICAR NELES
$("div.dente-odontograma > div.imagem-dente-odontograma").click(function () {
  var toothNumber = $(this).attr("id")

  // EVENTO DE CLIQUE DO BOTAO PARA FECHAR O MODAL
  $(".close-modal-dente-odontograma").click(function () {
    $(".checked").attr(
      "class",
      "modal-body modal-dente-odontograma border border-black hidden"
    )
    $(".carousel-inner").empty()
  })

  //AO CLICAR SE O MODAL ESTIVER ESCONDIDO(HIDDEN), MUDA A CLASSE PARA CHECKED(APARECE)
  if (
    $(".modal-dente-odontograma").attr("class") ==
    "modal-body modal-dente-odontograma border border-black hidden"
  ) {
    $(".modal-dente-odontograma").attr(
      "class",
      "modal-body modal-dente-odontograma-" +
        toothNumber +
        " border border-black checked"
    )
    $(".checked > h4")
      .text("Dente " + toothNumber)
      .attr("id", toothNumber)

    getInfoProcedimentoDente(toothNumber)

    // SE CLICAR NO MESMO DENTE ESCONDE O MODAL
  } else if (
    $(".checked").attr("class") ==
    "modal-body modal-dente-odontograma-" +
      toothNumber +
      " border border-black checked"
  ) {
    $(".checked").attr(
      "class",
      "modal-body modal-dente-odontograma border border-black hidden"
    )

    $(".modal-dente-odontograma > h4").text("Dente").removeAttr("id")
    $(".carousel-inner").empty()

    //SE A CLASSE ATUAL FOR DIFERENTE DA CLASSE DO DENTE CLICADO, ATUALIZA A CLASSE(MUDA O NÚMERO DO DENTE)
  } else if (
    $(".modal-dente-odontograma").attr("class") != $(".checked").attr("class")
  ) {
    $(".checked").attr(
      "class",
      "modal-body modal-dente-odontograma-" +
        toothNumber +
        " border border-black checked"
    )

    $(".checked > h4")
      .text("Dente " + toothNumber)
      .attr("id", toothNumber)

    $("#carrosselProcedimentos").attr(
      "class",
      "carousel carousel-dark slide hidden"
    )
    $(".carousel-inner").empty()
    getInfoProcedimentoDente(toothNumber)
  }
})
