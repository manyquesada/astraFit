<?php 
    foreach ($_POST as $post_var){
        echo $post_var . "<br/>";
    }
?>
<!DOCTYPE html>
<html lang = es>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "src/css/styles.css" type ="TEXT/CSS">
        <title>Main index</title>
    </head>

    <body>
        <header>
            <nav class="fixed closed">
                <a href = "" class = "brand-logo center"><img src="src/img/logo.png" alt=""></a>
                <div class="sidenav-trigger right">
                    <button class="menu" onclick="this.parentNode.parentNode.classList.toggle('opened');this.parentNode.parentNode.classList.toggle('closed');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
                        <svg width="40" height="40" viewBox="0 0 100 100">
                          <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                          <path class="line line2" d="M 20,50 H 80" />
                          <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                        </svg>
                      </button>
                </div>
                <div class="sidenav-trigger left hide">
                    <button class="backForm">
                        <svg viewBox="0 0 100 152" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 76l79 76 19-18-61-59 63-56L80 0z"></path>
                        </svg>
                    </button>
                </div>
                <!--ESta cerrado por el hide-->
                <aside class="show">
                    <div>
                        <ul>
                            <li><a href="">Entrenamiento</a></li>
                            <li><a href="">Nutrcición</a></li>
                            <li><a href="">Nosotros</a></li>
                            <li><a href="">Contacto</a></li>
                        </ul>
                    </div>
                    <div>
                    </div>
                </aside>
            </nav>
        </header>
        <main>
            <section class="register-container">
                <div class="form-container">
                    <div class="status-bar">
                        <div style="width: -0%"></div>
                    </div>
                    <div class="form-content background-image-sucess">
                        <header>
                            <h1>¿Eres hombre o mujer?</h1>
                            <p>Tu entrenador personalizado te espera. Este es tu primer paso</p>
                        </header>
                        <form class="columns-form" id="formGenero">
                            <div>
                                <input type="radio" id="gender1" name="gender1">
                                <label for="gender1" class="buttonLabel nosubmit">
                                    <svg viewBox="0 0 32 48" xmlns="http://www.w3.org/2000/svg">
                                        <path fill = "#ffc0d2 " d="M14 36v-4.124C6.107 30.892 0 24.16 0 16 0 7.163 7.163 0 16 0s16 7.163 16 16c0 8.16-6.107 14.892-14 15.876V36h4a2 2 0 0 1 0 4h-4v6a2 2 0 0 1-4 0v-6h-4a2 2 0 0 1 0-4h4zm14-20c0-6.627-5.373-12-12-12S4 9.373 4 16s5.373 12 12 12 12-5.373 12-12z">
                                        </path>
                                    </svg>
                                    <p>Mujer</p>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="gender2" name="gender2">
                                <label for="gender2" class="buttonLabel nosubmit">
                                    <svg viewBox="0 0 43 44" xmlns="http://www.w3.org/2000/svg">
                                        <path fill = "#126fbb" d="M39 6.652l-6.618 6.618A18.43 18.43 0 0 1 37 25.5C37 35.718 28.718 44 18.5 44S0 35.718 0 25.5 8.282 7 18.5 7c4.178 0 8.032 1.384 11.129 3.72L36.349 4h-6.474C28.839 4 28 3.105 28 2s.84-2 1.875-2h11.25a1.868 1.868 0 0 1 1.326.55A1.868 1.868 0 0 1 43 1.874v11.25C43 14.161 42.105 15 41 15s-2-.84-2-1.875V6.652zM33.3 25.5c0-8.175-6.625-14.8-14.8-14.8S3.7 17.325 3.7 25.5s6.625 14.8 14.8 14.8 14.8-6.625 14.8-14.8z"></path>
                                    </svg>
                                    <p>Hombre</p>
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="form-content hide">
                        <header>
                            <h1>¿Cuál es tu objetivo?</h1>
                            <p>¡Tu entrenamiento será el mejor para que logres tus metas!</p>
                        </header>
                        <form class="inline-form" id="formObjetivo">
                            <div>
                                <input type="radio" id="tonificar" name="tonificar">
                                <label for="tonificar" class="buttonLabel nosubmit">
                                    <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g id="XMLID_2436_"><g id="XMLID_47_"><path id="XMLID_55_" d="m427.028 279.391c-4.902 2.543-6.814 8.58-4.271 13.482 10.112 19.49 15.24 40.943 15.24 63.763 0 74.639-60.724 135.362-135.364 135.362-32.63 0-64.072-11.278-88.535-31.756-11.157-9.339-25.13-14.482-39.348-14.483l-76.302-.003c-27.257 0-52.965-14.481-67.091-37.792-7.43-12.261-11.357-26.32-11.357-40.656v-18.514c0-19.734 10.484-38.347 27.362-48.574 4.723-2.862 6.232-9.011 3.37-13.735-2.862-4.723-9.011-6.231-13.735-3.37-6.383 3.868-12.087 8.623-16.997 14.05v-30.985c0-54.933 7.013-109.743 20.845-162.907 6.181-23.757 24.739-42.505 48.433-48.927l124.125-33.645c8.824-2.394 18.226 1.791 22.357 9.946l25.219 49.771c4.437 8.756 4.912 19.013 1.304 28.141-3.607 9.128-10.967 16.289-20.19 19.646l-53.502 19.471c-14.3 5.204-30.048.527-39.19-11.636l-12.343-16.421 6.209-2.904c5.002-2.34 7.161-8.292 4.821-13.295-2.34-5.002-8.292-7.158-13.295-4.821l-6.221 2.911c-8.036 3.759-17.657.93-22.38-6.581-2.939-4.675-9.112-6.083-13.789-3.142-4.675 2.939-6.082 9.113-3.142 13.789 5.763 9.165 14.942 15.063 24.953 16.938l10.786 14.349v3.216c0 37.22 13.6 73.055 38.293 100.903 19.076 21.514 29.582 49.197 29.582 77.95v26.736c0 5.523 4.477 10 10 10s10-4.477 10-10v-26.736c0-19.32-4.061-38.225-11.739-55.59 25.831-28.118 62.14-44.15 100.46-44.15 22.037 0 43.065 5.089 62.499 15.126 4.908 2.536 10.939.611 13.474-4.296s.611-10.939-4.296-13.474c-21.985-11.355-46.77-17.356-71.676-17.356-41.621 0-81.179 16.484-110.408 45.624-3.837-5.992-8.152-11.714-12.931-17.103-16.86-19.014-27.76-42.316-31.654-67.118 14.09 9.492 32.085 11.966 48.828 5.874l53.502-19.471c14.596-5.312 26.241-16.643 31.95-31.088s4.957-30.676-2.063-44.532l-25.219-49.771c-8.396-16.569-27.5-25.069-45.43-20.21l-124.127 33.646c-30.603 8.295-54.572 32.51-62.556 63.194-14.259 54.808-21.489 111.312-21.489 167.943v101.128c0 17.991 4.928 35.634 14.252 51.021 17.727 29.254 49.989 47.427 84.195 47.427l76.302.003c9.532 0 18.947 3.487 26.511 9.819 28.056 23.486 64.058 36.42 101.373 36.42 85.668 0 155.364-69.695 155.364-155.362 0-25.69-6.047-50.924-17.487-72.974-2.543-4.902-8.577-6.815-13.482-4.271z"/><path id="XMLID_56_" d="m227.903 396.254c-3.905-3.905-10.237-3.905-14.143 0-3.905 3.905-3.905 10.237 0 14.143 23.525 23.524 54.802 36.48 88.071 36.48s64.546-12.956 88.071-36.48c3.905-3.905 3.905-10.237 0-14.143-3.905-3.905-10.237-3.905-14.143 0-40.762 40.764-107.092 40.764-147.856 0z"/><path id="XMLID_59_" d="m511.012 66.41c-1.666-3.464-5.168-5.667-9.012-5.667h-41.982l18.116-47.156c1.181-3.075.772-6.534-1.093-9.249-1.866-2.715-4.948-4.337-8.242-4.337h-68.394c-4.277 0-8.08 2.72-9.463 6.767l-34.564 101.159c-1.043 3.054-.549 6.424 1.329 9.05 1.877 2.625 4.907 4.183 8.134 4.183h43.752l-14.417 68.902c-.948 4.531 1.338 9.121 5.525 11.094 1.368.645 2.82.955 4.259.955 2.966 0 5.868-1.321 7.814-3.756l97.036-121.367c2.4-3.002 2.868-7.114 1.202-10.578zm-87.672 86.703 8.349-39.905c.617-2.948-.128-6.016-2.027-8.354s-4.75-3.694-7.761-3.694h-42.076l27.731-81.159h46.689l-18.116 47.156c-1.181 3.075-.772 6.534 1.093 9.249 1.866 2.715 4.948 4.337 8.242 4.337h35.738z"/><path id="XMLID_60_" d="m412.09 259.051c1.86-1.86 2.93-4.44 2.93-7.07 0-2.64-1.07-5.21-2.93-7.07s-4.44-2.93-7.07-2.93-5.21 1.07-7.07 2.93-2.93 4.43-2.93 7.07c0 2.63 1.07 5.21 2.93 7.07s4.44 2.93 7.07 2.93c2.63.001 5.21-1.07 7.07-2.93z"/></g></g></svg>
                                    <div>
                                        <p>Tonificar</p>
                                        <p>Definir los músculos</p>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="mejorarSalud" name="mejorarSalud">
                                <label for="mejorarSalud" class="buttonLabel nosubmit">
                                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="29.037px" height="29.037px" viewBox="0 0 29.037 29.037" style="enable-background:new 0 0 29.037 29.037;"
                                         xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M28.675,13.298c-0.672-7.499-9.896-5.292-11.375-1.025c-0.72-2.071-3.263-3.645-5.766-3.871l-0.112,0.9
                                                c0.166,0.238,0.256,0.519,0.256,0.811c0,2.654-1.938,4.903-4.508,5.36c-0.146,0.791-0.427,1.445-0.768,2.017
                                                c1.273,4.101,4.713,7.179,7.405,9.041c1.292-1.038,1.902-2.785,2.178-4.646c-1.368-0.529-2.342-1.849-2.342-3.402
                                                c0-2.02,1.637-3.656,3.656-3.656c2.019,0,3.655,1.637,3.655,3.656c0,1.726-1.201,3.164-2.812,3.548
                                                c-0.409,2.735-1.303,4.548-2.432,5.716c0.951,0.553,1.587,0.854,1.587,0.854S29.539,22.945,28.675,13.298z"/>
                                            <path d="M19.493,18.48c0-1.211-0.982-2.194-2.192-2.194c-1.212,0-2.194,0.981-2.194,2.194c0,1.062,0.757,1.949,1.763,2.149
                                                c-0.227,3.111-1.269,7.603-6.072,7.603c-0.525,0-1.068,0.018-1.615,0.035c-3.938,0.135-7.661,0.254-8.125-5.582
                                                c-0.122-1.523,0.884-2.219,2.155-3.099c1.381-0.954,3.053-2.144,3.314-4.771c2.461-0.164,4.42-2.199,4.42-4.702
                                                c0-0.235-0.118-0.435-0.29-0.569l0.924-7.391C11.599,2,11.519,1.851,11.382,1.781L10.199,1.19
                                                c0.004-0.029,0.018-0.053,0.018-0.083C10.217,0.496,9.72,0,9.111,0C8.5,0,8.004,0.496,8.004,1.107
                                                c0,0.612,0.495,1.106,1.106,1.106c0.317,0,0.598-0.137,0.799-0.351l0.914,0.458L9.936,9.439c-0.265,0.11-0.45,0.371-0.45,0.674
                                                c0,1.804-1.468,3.271-3.271,3.271c-1.803,0-3.271-1.467-3.271-3.271c0-0.303-0.184-0.562-0.446-0.674L1.606,2.32l0.912-0.457
                                                c0.202,0.213,0.483,0.35,0.802,0.35c0.61,0,1.105-0.494,1.105-1.106C4.426,0.496,3.931,0,3.321,0C2.708,0,2.212,0.496,2.212,1.107
                                                c0,0.03,0.015,0.055,0.018,0.084l-1.18,0.59c-0.14,0.069-0.219,0.218-0.2,0.372l0.926,7.389c-0.174,0.133-0.295,0.334-0.295,0.571
                                                c0,2.468,1.906,4.479,4.319,4.692c-0.242,2.25-1.636,3.237-3.002,4.181c-1.289,0.892-2.624,1.814-2.468,3.759
                                                c0.445,5.606,3.781,6.292,7.197,6.292c0.562,0,1.127-0.02,1.679-0.036c0.541-0.019,1.075-0.036,1.593-0.036
                                                c4.054,0,6.318-2.806,6.772-8.316C18.651,20.514,19.493,19.6,19.493,18.48z"/>
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    </svg>                                    
                                    <div>
                                        <p>Ponerme en forma</p>
                                        <p>Mejora tu salud en todos los aspectos</p>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="perderPeso" name="perderPeso">
                                <label for="perderPeso" class="buttonLabel nosubmit">
                                    <svg height="511pt" viewBox="0 -29 511.99963 511" width="511pt" xmlns="http://www.w3.org/2000/svg"><path d="m419.058594 204.535156c-4.160156 0-7.527344 3.367188-7.527344 7.527344v60.179688h-19.804688c-7.847656 0-12.429687 8.871093-7.882812 15.269531l27.332031 38.460937c3.847657 5.414063 11.914063 5.417969 15.761719 0l27.332031-38.460937c4.546875-6.394531-.03125-15.269531-7.878906-15.269531h-19.804687v-60.179688c0-4.160156-3.371094-7.527344-7.527344-7.527344zm0 106.539063-16.902344-23.777344h33.800781zm0 0"/><path d="m251.4375 244.941406c0-13.496094-10.980469-24.476562-24.476562-24.476562-13.496094 0-24.476563 10.980468-24.476563 24.476562s10.980469 24.476563 24.476563 24.476563c13.496093 0 24.476562-10.980469 24.476562-24.476563zm-24.476562 9.421875c-5.195313 0-9.421876-4.226562-9.421876-9.421875 0-5.195312 4.226563-9.425781 9.421876-9.425781 5.195312 0 9.421874 4.230469 9.421874 9.425781 0 5.195313-4.226562 9.421875-9.421874 9.421875zm0 0"/><path d="m53.121094 453.714844h156.277344c4.160156 0 7.527343-3.371094 7.527343-7.527344s-3.367187-7.527344-7.527343-7.527344h-156.277344c-20.992188 0-38.066406-17.074218-38.066406-38.066406v-346.972656c0-20.992188 17.074218-38.066406 38.066406-38.066406h346.972656c20.992188 0 38.066406 17.074218 38.066406 38.066406v120.851562c-15.628906-3.183594-31.789062-2.460937-47.183594 2.292969-27.8125-64.257813-91.503906-107.921875-164.367187-107.921875-76.011719 0-143.953125 48.175781-169.066406 119.875-3.660157 10.445312-2.027344 22.121094 4.363281 31.234375 6.457031 9.207031 16.5625 14.558594 27.753906 14.679687h82.246094c6.523438 0 12.496094-3.496093 15.578125-9.121093 16.921875-30.886719 61.320313-30.894531 78.246094-.003907 3.082031 5.628907 9.050781 9.125 15.578125 9.125h48.851562c-25.527344 69.832032 35.367188 140.265626 108 125.46875v40.492188c0 20.992188-17.074218 38.066406-38.066406 38.066406h-155.570312c-4.160157 0-7.527344 3.371094-7.527344 7.527344s3.367187 7.527344 7.527344 7.527344h155.570312c29.292969 0 53.121094-23.832032 53.121094-53.121094v-44.890625c29.316406-11.3125 52.039062-37.132813 58.628906-69.347656.835938-4.070313-1.789062-8.046875-5.863281-8.882813-4.078125-.835937-8.050781 1.792969-8.882813 5.867188-7.460937 36.460937-39.628906 63.628906-78.039062 63.628906-61.8125 0-100.082032-67.644531-68.378906-120.59375 14.703124-24.582031 40.78125-38.769531 68.378906-38.769531 38.109375 0 70.515625 26.867187 78.039062 63.625.832032 4.074219 4.796875 6.699219 8.882813 5.867187 4.074219-.832031 6.699219-4.8125 5.863281-8.882812-6.574219-32.136719-29.242188-58.003906-58.628906-69.347656v-125.246094c0-29.292969-23.828125-53.121094-53.121094-53.121094h-346.972656c-29.292969 0-53.121094 23.828125-53.121094 53.121094v346.972656c0 29.292969 23.828125 53.121094 53.121094 53.121094zm121.160156-235.4375c-.433594.792968-1.367188 1.304687-2.375 1.304687h-12.589844c14.339844-32.261719 50.335938-50.738281 85.695313-41.753906l-4.324219 11.113281c-26.21875-6.371094-53.433594 5.664063-66.40625 29.335938zm107.03125 1.304687c-1.011719 0-1.945312-.511719-2.378906-1.304687-5.671875-10.355469-14.152344-18.582032-24.1875-23.957032l4.40625-11.3125c15.542968 7.5625 28.277344 20.433594 35.453125 36.574219zm55.882812 0h-26.40625c-8.109374-22.65625-25.039062-40.699219-46.164062-50.628906l19.730469-50.679687c1.507812-3.875-.410157-8.238282-4.28125-9.746094-3.871094-1.507813-8.238281.410156-9.746094 4.285156l-19.824219 50.914062c-45.667968-12.644531-92.074218 13.113282-107.371094 55.855469h-53.027343l-.308594-.003906c-6.253906-.066406-11.929687-3.078125-15.566406-8.265625-3.664063-5.226562-4.570313-11.648438-2.480469-17.617188 23-65.671874 85.234375-109.796874 154.855469-109.796874 64.972656 0 124.511719 39.28125 150.394531 98.453124-16.460938 8.171876-30.449219 21.203126-39.804688 37.230469zm0 0"/></svg>
                                    <div>
                                        <p>Perder peso</p>
                                        <p>Reduce tu masa corporal</p>
                                    </div>
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="form-content hide">
                        <header>
                            <h1>¿Cuál es tu nivel de forma física actual?</h1>
                            <p>Para obtener el nivel de entrenamiento selecciona la que mejor te describe: </p>
                        </header>
                        <form class="inline-form" id="formNivelEntrenamiento">
                            <div>
                                <input type="radio" id="nivel1" name="nivel1">
                                <label for="nivel1" class="buttonLabel nosubmit">
                                    <svg viewBox="0 0 34 24" xmlns="http://www.w3.org/2000/svg">
                                        <rect fill="white" x="0" y="20" width="4" height="4"></rect><rect x="6" y="16" width="4" height="8"></rect><rect x="12" y="12" width="4" height="12"></rect><rect x="18" y="8" width="4" height="16"></rect><rect x="24" y="4" width="4" height="20"></rect><rect x="30" y="0" width="4" height="24"></rect>
                                    </svg>
                                    <div>
                                        <p>Nada en forma</p>
                                        <p>Si me siento en el suelo, tengo problemas para levantarme</p>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="nivel2" name="nivel2">
                                <label for="nivel2" class="buttonLabel nosubmit">
                                    <svg viewBox="0 0 34 24" xmlns="http://www.w3.org/2000/svg">
                                        <rect fill="white" x="0" y="20" width="4" height="4"></rect><rect fill = "white"x="6" y="16" width="4" height="8"></rect><rect x="12" y="12" width="4" height="12"></rect><rect x="18" y="8" width="4" height="16"></rect><rect x="24" y="4" width="4" height="20"></rect><rect x="30" y="0" width="4" height="24"></rect>
                                    </svg>
                                    <div>
                                        <p>Es mi primera vez con el Fitness</p>
                                        <p>No suelo hacer ejercicio</p>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="nivel3" name="nivel3" >
                                <label for="nivel3" class="buttonLabel nosubmit">
                                    <svg viewBox="0 0 34 24" xmlns="http://www.w3.org/2000/svg">
                                        <rect fill="white" x="0" y="20" width="4" height="4"></rect><rect fill="white" x="6" y="16" width="4" height="8"></rect><rect fill="white" x="12" y="12" width="4" height="12"></rect><rect x="18" y="8" width="4" height="16"></rect><rect x="24" y="4" width="4" height="20"></rect><rect x="30" y="0" width="4" height="24"></rect>
                                    </svg>
                                    <div>
                                        <p>Hago ejercicio ocasionalmente</p>
                                        <p>Entreno hasta sudar de forma ocasional</p>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="nivel4" name="nivel4">
                                <label for="nivel4" class="buttonLabel nosubmit">
                                    <svg viewBox="0 0 34 24" xmlns="http://www.w3.org/2000/svg">
                                        <rect fill="white" x="0" y="20" width="4" height="4"></rect><rect fill="white" x="6" y="16" width="4" height="8"></rect><rect fill="white" x="12" y="12" width="4" height="12"></rect><rect fill="white" x="18" y="8" width="4" height="16"></rect><rect x="24" y="4" width="4" height="20"></rect><rect x="30" y="0" width="4" height="24"></rect>
                                    </svg>
                                    <div>
                                        <p>Hago ejercicio de forma regular</p>
                                        <p>Hago ejercicio al menos dos veces por seamana</p>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="nivel5" name="nivel5">
                                <label for="nivel5" class="buttonLabel nosubmit">
                                    <svg viewBox="0 0 34 24" xmlns="http://www.w3.org/2000/svg">
                                        <rect fill="white" x="0" y="20" width="4" height="4"></rect><rect fill="white" x="6" y="16" width="4" height="8"></rect><rect fill="white" x="12" y="12" width="4" height="12"></rect><rect fill="white" x="18" y="8" width="4" height="16"></rect><rect fill="white" x="24" y="4" width="4" height="20"></rect><rect x="30" y="0" width="4" height="24"></rect>
                                    </svg>
                                    <div>
                                        <p>Tengo experiencia entrenando</p>
                                        <p>Me encanta el fitness y entreno casi todos los días</p>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="nivel6" name="nivel6">
                                <label for="nivel6" class="buttonLabel nosubmit">
                                    <svg viewBox="0 0 34 24" xmlns="http://www.w3.org/2000/svg">
                                        <rect fill="white" x="0" y="20" width="4" height="4"></rect><rect fill="white" x="6" y="16" width="4" height="8"></rect><rect fill="white" x="12" y="12" width="4" height="12"></rect><rect fill="white" x="18" y="8" width="4" height="16"></rect><rect fill="white" x="24" y="4" width="4" height="20"></rect><rect fill="white" x="30" y="0" width="4" height="24"></rect>
                                    </svg>
                                    <div>
                                        <p>Atleta avanzado</p>
                                        <p>Estoy muy en forma y entreno todos los días</p>
                                    </div>
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="form-content hide">
                        <header>
                            <h1>Proporcionanos un poco más de información</h1>
                            <p>Esta información es vital para diseñar un plan de entrenamiento seguro y personalizado</p>
                        </header>
                        <form class="inline-form-text" autocomplete="off" id="formularioPesoAltura">
                            <div>
                                <label for="fechaNacimiento">
                                    <p>Fecha de nacimiento</p>
                                </label>
                                <input type="date" name="fechaNacimiento" id="fechaNacimiento" required min="1920-01-01" max="2010-12-31">
                            </div>
                            <div>
                                <label for="Altura">
                                    <p>Altura</p>
                                </label>
                                <div>
                                    <input type="number" name="Altura" id="Altura" pattern="[0-9]+(\.[0-9]*)?" required min="120" max="250">
                                    <select name="heightUnit" id="heightUnit">
                                        <option value="cm">cm</option>
                                        <option value="cm">ft</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label for="Peso">
                                    <p>Peso</p>
                                </label>
                                <div>
                                    <input type="number" name="Peso" id="Peso" pattern="[0-9]+(\.[0-9]*)?" required min="40" max="150">
                                    <select name="weightUnit" id="weightUnit">
                                        <option value="kg">kg</option>
                                        <option value="lbs">lbs</option>
                                    </select>
                                </div>
                                <div class="next buttonLabel" id="validarPesoAltura">
                                    <label for="validarPesoAltura">Siguiente</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="form-content hide">
                        <header>
                            <h1>Ya casi estamos</h1>
                            <p>Proporciona está información para poderte identificar</p>
                        </header>
                        <form class="inline-form-text" autocomplete="off" id="formularioDatosCuenta">
                            <div>
                                <label for="NombreUsuario">
                                    <p>Nombre(s)</p>
                                </label>
                                <div>
                                    <input type="text" name="NombreUsuario" id="NombreUsuario" pattern="[0-9]+(\.[0-9]*)?">
                                </div>
                            </div>
                            <div>
                                <label for="Correo">
                                    <p>Correo electrónico</p>
                                </label>
                                <div>
                                    <input type="text" name="Correo" id="Correo" pattern="[0-9]+(\.[0-9]*)?" required min="">
                                </div>
                            </div>
                            <div>
                                <label for="Contrasena">
                                    <p>Contraseña</p>
                                </label>
                                <div>
                                    <input type="password" name="Contrasena" id="Contrasena" pattern="[0-9]+(\.[0-9]*)?" required min="">
                                </div>
                                <div class="next buttonLabel" id="validarDatosCuenta">
                                    <label for="validarDatosCuenta">Siguiente</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="form-content hide">
                        <header>
                            <h1>Ya casi estamos</h1>
                            <p>Proporciona está será una pequeña evaluación para el nivel de tu entrenamiento. Seleccione las que posea: </p>
                        </header>
                        <form class="inline-form-checkbox" id="formDiagnostico">
                            <div>
                                <input type="checkbox" id="box-1" name="condicion1">
                                <label for="box-1">¿Te ha dicho alguna vez tu médico que tienes problemas cardíacos y que no debes hacer ejercicio sin consultarlo con un médico?</label>
                            </div>
                            <div>
                                <input type="checkbox" id="box-2" name="condicion2">
                                <label for="box-2">¿Te ocasiona dolores en el pecho la actividad física?</label>
                            </div>
                            <div>
                                <input type="checkbox" id="box-3" name="condicion3">
                                <label for="box-3">¿Has sentido dolor en el pecho el último mes cuando has realizado alguna actividad física?</label>
                            </div>
                            <div>
                                <input type="checkbox" id="box-4" name="condicion4">
                                <label for="box-4">¿Sientes mareos que te hacen perder el equilibrio o el conocimiento?</label>
                            </div>
                            <div>
                                <input type="checkbox" id="box-5" name="condicion5">
                                <label for="box-5">¿Tomas medicamentos contra la hipertensión o insuficiencia cardíaca?</label>
                            </div>
                            <div>
                                <input type="checkbox" id="box-6" name="condicion6">
                                <label for="box-6">Tu experiencia personal o el asesoramiento médico ¿Te hacen pensar que no deberías hacer ejercicio físico sin prescripción médica?</label>
                            </div>
                            <section>
                                <div class="next buttonLabel" id="enviarFormulario">
                                    <label for="enviarFormulario">Siguiente</label>
                                </div>
                            </section>
                        </form>
                    </div>
                    <div class="form-content hide sucess">
                        <h1>¡YA CASI ES TUYO!</h1>
                        <h3>¡Estamos creando tu mejor plan de entrenamiento!</h3>
                    </div>
                </div>
            </section>
        </main>
    </body>
    <script src ="src/js/registro.js"></script>
</html>