<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="/soulclinic/src/css/odontograma.css" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <title>Odontograma</title>
</head>

<body>
  <div class="container">
    <div class="odontogramaPermanenteDeciduo">
      <form class="form-group">
        <div class="modal-body modal-dente-odontograma border border-black hidden">
          <button type="button" class="close-modal-dente-odontograma" aria-label="Close">
            <img src="/soulclinic/src/assets/x-circle.svg" alt="Fecha a aba do dente" />
          </button>

          <h4 class="mt-3 mb-2">Dente</h4>
          <!--########################### TESTE CARROSSEL ###############################-->
          <div id="carrosselProcedimentos" class="carousel carousel-dark slide hidden" data-ride="carousel">
            <div class="carousel-inner" id="carousel-inner">

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carrosselProcedimentos" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrosselProcedimentos" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!--########################### TESTE CARROSSEL ###############################-->
          <select id="select2">
            <option value="default" selected>Seleciona o procedimento</option>
          </select>
          <div class="form-group mb-2 mt-2">
            <textarea class="form-control" id="textoObservacoes" rows="4" placeholder="Adicione observações"></textarea>
          </div>
          <div class="mb-2 d-flex align-items-center justify-content-center">
            <button class="btn btn-primary save-modal-dentes-odontograma" id="save-modal-dentes-odontograma" type="submit">
              Salvar
            </button>
          </div>
        </div>
      </form>

      <div class="odontograma" data-target="element-switcher.change" id="odontogramaPermanente">

        <div class="dentes">
          <div class="botaoDentes">
            <div class="group-radio--container" role="group" aria-label="Basic radio toggle button group">
              <input type="radio" class="btn-check" name="btnradio" id="botaoPermanente" autocomplete="off" />
              <label class="btn btn-outline-primary" for="botaoPermanente">Permanentes</label>

              <input type="radio" class="btn-check" name="btnradio" id="botaoDeciduo" autocomplete="off" />
              <label class="btn btn-outline-primary" for="botaoDeciduo">Decíduos</label>
            </div>
          </div>
          <div class="odontograma-dentes-superiores">
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-18" id="18"></div>
              <div class="odontogram-number odontogram-number-18">18</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-17" id="17"></div>
              <div class="odontogram-number odontogram-number-17">17</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-16" id="16"></div>
              <div class="odontogram-number odontogram-number-16">16</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-15" id="15"></div>
              <div class="odontogram-number odontogram-number-15">15</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-14" id="14"></div>
              <div class="odontogram-number odontogram-number-14">14</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-13" id="13"></div>
              <div class="odontogram-number odontogram-number-13">13</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-12" id="12"></div>
              <div class="odontogram-number odontogram-number-12">12</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-11" id="11"></div>
              <div class="odontogram-number odontogram-number-11">11</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-21" id="21"></div>
              <div class="odontogram-number odontogram-number-21">21</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-22" id="22"></div>
              <div class="odontogram-number odontogram-number-22">22</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-23" id="23"></div>
              <div class="odontogram-number odontogram-number-23">23</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-24" id="24"></div>
              <div class="odontogram-number odontogram-number-24">24</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-25" id="25"></div>
              <div class="odontogram-number odontogram-number-25">25</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-26" id="26"></div>
              <div class="odontogram-number odontogram-number-26">26</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-27" id="27"></div>
              <div class="odontogram-number odontogram-number-27">27</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-28" id="28"></div>
              <div class="odontogram-number odontogram-number-28">28</div>
            </div>
          </div>
          <div class="mb-3 odontograma-dentes-inferiores">
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-48">48</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-48" id="48"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-47">47</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-47" id="47"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-46">46</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-46" id="46"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-45">45</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-45" id="45"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-44">44</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-44" id="44"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-43">43</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-43" id="43"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-42">42</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-42" id="42"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-41">41</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-41" id="41"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-31">31</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-31" id="31"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-32">32</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-32" id="32"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-33">33</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-33" id="33"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-34">34</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-34" id="34"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-35">35</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-35" id="35"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-36">36</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-36" id="36"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-37">37</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-37" id="37"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-38">38</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-38" id="38"></div>
            </div>
          </div>
        </div>
      </div>

      <div id="odontogramaDeciduo" class="odontograma odontogram-deciduous hidden" data-target="element-switcher.change">
        <div class="dentes">
          <div class="botaoDentes">
            <div class="group-radio--container" role="group" aria-label="Basic radio toggle button group">
              <input type="radio" class="btn-check" name="btnradio" id="botaoPermanente" autocomplete="off" checked />
              <label class="btn btn-outline-primary" for="botaoPermanente">Permanentes</label>

              <input type="radio" class="btn-check" name="btnradio" id="botaoDeciduo" autocomplete="off" />
              <label class="btn btn-outline-primary" for="botaoDeciduo">Decíduos</label>
            </div>
          </div>
          <div class="odontograma-dentes-superiores">
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-55" id="55"></div>
              <div class="odontogram-number odontogram-number-55">55</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-54" id="54"></div>
              <div class="odontogram-number odontogram-number-54">54</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-53" id="53"></div>
              <div class="odontogram-number odontogram-number-53">53</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-52" id="52"></div>
              <div class="odontogram-number odontogram-number-52">52</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-51" id="51"></div>
              <div class="odontogram-number odontogram-number-51">51</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-61" id="61"></div>
              <div class="odontogram-number odontogram-number-61">61</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-62" id="62"></div>
              <div class="odontogram-number odontogram-number-62">62</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-63" id="63"></div>
              <div class="odontogram-number odontogram-number-63">63</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-64" id="64"></div>
              <div class="odontogram-number odontogram-number-64">64</div>
            </div>
            <div class="dente-odontograma">
              <div class="imagem-dente-odontograma imagem-dente-odontograma-65" id="65"></div>
              <div class="odontogram-number odontogram-number-65">65</div>
            </div>
          </div>

          <div class="odontograma-dentes-inferiores">
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-85">85</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-85" id="85"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-84">84</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-84" id="84"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-83">83</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-83" id="83"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-82">82</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-82" id="82"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-81">81</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-81" id="81"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-71">71</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-71" id="71"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-72">72</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-72" id="72"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-73">73</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-73" id="73"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-74">74</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-74" id="74"></div>
            </div>
            <div class="dente-odontograma">
              <div class="odontogram-number odontogram-number-75">75</div>
              <div class="imagem-dente-odontograma imagem-dente-odontograma-75" id="75"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="/soulclinic/src/js/odontograma.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>