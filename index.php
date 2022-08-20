<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="style\style.css" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projet_final</title>
</head>
<body>
    <header>
        <nav class="container_menu">
            
<!--menu + logo version mobile-->
            <div id="mySidenav" class="sidenav">
                <a id="closeBtn" href="#" class="close">×</a>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="produit.php">Produits</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="acces.php">Acces</a></li>
                    </ul>
            </div>

            <a href="#" id="openBtn">
              <span class="burger-icon">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </a>
          
        
            <a class="logo_icone" href="index.php">
                <!--logo mobil -->
                <svg width="110" height="24" viewBox="0 0 150 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0159 7.51596C28.0159 10.2802 26.5388 12.6944 24.3401 14C26.5388 15.3056 28.0159 17.7198 28.0159 20.484C28.0159 24.6349 24.6872 28 20.5811 28C17.7303 28 15.2556 26.3772 14.008 23.9965C12.7603 26.3772 10.2856 28 7.43477 28C3.32871 28 0 24.6349 0 20.484C0 17.7198 1.47714 15.3056 3.67585 14C1.47714 12.6944 0 10.2802 0 7.51596C0 3.36506 3.32871 0 7.43477 0C10.2856 0 12.7603 1.62277 14.008 4.00348C15.2556 1.62277 17.7303 0 20.5811 0C24.6872 0 28.0159 3.36506 28.0159 7.51596ZM54.9272 21.4341C53.8579 22.2954 52.3337 22.734 50.3548 22.75H43.5799V5.33203H49.6845C51.7991 5.33203 53.403 5.73678 54.4963 6.54626C55.5895 7.35575 56.1361 8.54207 56.1361 10.1052C56.1361 10.9586 55.9167 11.7102 55.4778 12.3602C55.0389 13.0102 54.4284 13.4867 53.6464 13.7898C54.5402 14.0131 55.2444 14.4637 55.7591 15.1416C56.2738 15.8195 56.5311 16.6489 56.5311 17.6299C56.5311 19.3047 55.9965 20.5728 54.9272 21.4341ZM47.1708 12.6294H49.8281C51.6395 12.5975 52.5452 11.8757 52.5452 10.4641C52.5452 9.67456 52.3158 9.10632 51.857 8.7594C51.3981 8.41248 50.674 8.23901 49.6845 8.23901H47.1708V12.6294ZM50.247 19.8669H47.1708V15.1655H50.4625C52.1143 15.1895 52.9402 15.9989 52.9402 17.594C52.9402 18.3038 52.7028 18.8601 52.228 19.2628C51.7532 19.6656 51.0929 19.8669 50.247 19.8669ZM68.9348 22.75V25.4536H58.0304V22.75H68.9348ZM75.5691 22.9893C77.173 22.9893 78.4817 22.6244 79.4951 21.8947C80.5086 21.1649 81.0153 20.2099 81.0153 19.0295C81.0153 17.3787 80.1016 16.2183 78.2742 15.5483C77.6837 15.333 76.9576 15.1396 76.0957 14.9681C75.2339 14.7967 74.6215 14.5933 74.2584 14.358C73.8953 14.1228 73.7138 13.8137 73.7138 13.4309C73.7138 13.0242 73.8734 12.6892 74.1926 12.426C74.5117 12.1628 74.9626 12.0312 75.5451 12.0312C76.2234 12.0312 76.7222 12.1927 77.0413 12.5157C77.3605 12.8387 77.5201 13.2475 77.5201 13.7419H80.9794C80.9794 12.5058 80.4866 11.5009 79.5011 10.7273C78.5156 9.9537 77.2009 9.56689 75.5571 9.56689C74.017 9.56689 72.7702 9.9517 71.8166 10.7213C70.863 11.4909 70.3862 12.45 70.3862 13.5984C70.3862 15.5683 71.9263 16.8762 75.0065 17.5222C75.9322 17.7136 76.6045 17.931 77.0234 18.1742C77.4423 18.4174 77.6518 18.7504 77.6518 19.1731C77.6518 19.5798 77.4822 19.9088 77.1431 20.16C76.8039 20.4113 76.3032 20.5369 75.6409 20.5369C74.9307 20.5369 74.3641 20.3734 73.9412 20.0464C73.5183 19.7194 73.2908 19.2489 73.2589 18.6348H69.9792C69.9792 19.4163 70.2186 20.1441 70.6974 20.818C71.1762 21.4919 71.8365 22.0223 72.6784 22.4091C73.5203 22.7959 74.4838 22.9893 75.5691 22.9893ZM89.038 25.4417C88.264 27.1324 86.9872 27.9778 85.2077 27.9778C84.705 27.9778 84.1943 27.902 83.6756 27.7505V25.1306L84.2023 25.1426C84.8566 25.1426 85.3454 25.0429 85.6686 24.8435C85.9918 24.6441 86.2451 24.3132 86.4287 23.8506L86.8356 22.7859L82.2991 9.80615H86.0217L88.4276 17.8572L90.8215 9.80615H94.5321L89.3253 24.7598L89.038 25.4417ZM101.178 22.9893C102.782 22.9893 104.091 22.6244 105.104 21.8947C106.118 21.1649 106.625 20.2099 106.625 19.0295C106.625 17.3787 105.711 16.2183 103.884 15.5483C103.293 15.333 102.567 15.1396 101.705 14.9681C100.843 14.7967 100.231 14.5933 99.8677 14.358C99.5046 14.1228 99.3231 13.8137 99.3231 13.4309C99.3231 13.0242 99.4827 12.6892 99.8019 12.426C100.121 12.1628 100.572 12.0312 101.154 12.0312C101.833 12.0312 102.331 12.1927 102.651 12.5157C102.97 12.8387 103.129 13.2475 103.129 13.7419H106.589C106.589 12.5058 106.096 11.5009 105.11 10.7273C104.125 9.9537 102.81 9.56689 101.166 9.56689C99.6263 9.56689 98.3795 9.9517 97.4259 10.7213C96.4723 11.4909 95.9955 12.45 95.9955 13.5984C95.9955 15.5683 97.5356 16.8762 100.616 17.5222C101.541 17.7136 102.214 17.931 102.633 18.1742C103.052 18.4174 103.261 18.7504 103.261 19.1731C103.261 19.5798 103.092 19.9088 102.752 20.16C102.413 20.4113 101.913 20.5369 101.25 20.5369C100.54 20.5369 99.9734 20.3734 99.5505 20.0464C99.1276 19.7194 98.9002 19.2489 98.8682 18.6348H95.5885C95.5885 19.4163 95.8279 20.1441 96.3067 20.818C96.7855 21.4919 97.4458 22.0223 98.2877 22.4091C99.1296 22.7959 100.093 22.9893 101.178 22.9893ZM115.689 22.6782C115.01 22.8856 114.312 22.9893 113.594 22.9893C111.168 22.9893 109.931 21.7651 109.883 19.3167V12.3423H107.992V9.80615H109.883V6.62402H113.343V9.80615H115.557V12.3423H113.343V18.8022C113.343 19.2808 113.434 19.6237 113.618 19.8311C113.802 20.0384 114.153 20.1421 114.671 20.1421C115.054 20.1421 115.393 20.1142 115.689 20.0583V22.6782ZM123.795 22.9893C124.873 22.9893 125.854 22.7839 126.74 22.3732C127.626 21.9624 128.328 21.3902 128.846 20.6565L127.147 18.7544C126.397 19.7194 125.355 20.2019 124.023 20.2019C123.161 20.2019 122.449 19.9467 121.886 19.4363C121.324 18.9259 120.986 18.248 120.875 17.4026H129.122V15.991C129.122 13.9413 128.613 12.3582 127.596 11.2417C126.578 10.1252 125.184 9.56689 123.412 9.56689C122.231 9.56689 121.18 9.84403 120.258 10.3983C119.337 10.9526 118.624 11.7421 118.122 12.767C117.619 13.7918 117.368 14.9542 117.368 16.2542V16.5891C117.368 18.5271 117.964 20.0783 119.157 21.2427C120.35 22.4071 121.896 22.9893 123.795 22.9893ZM120.911 15.0459H125.722V14.7708C125.706 14.0051 125.499 13.413 125.1 12.9943C124.701 12.5756 124.134 12.3662 123.4 12.3662C122.714 12.3662 122.157 12.5975 121.731 13.0601C121.304 13.5226 121.03 14.1846 120.911 15.0459ZM134.894 13.5984C135.333 12.7849 136.043 12.3782 137.025 12.3782C137.735 12.3782 138.238 12.5457 138.533 12.8806C138.828 13.2156 138.976 13.7579 138.976 14.5076V22.75H142.435L142.423 13.8616C142.822 12.8726 143.54 12.3782 144.578 12.3782C145.304 12.3782 145.811 12.5476 146.098 12.8866C146.385 13.2255 146.529 13.7619 146.529 14.4956V22.75H150V14.4836C150 12.8407 149.657 11.6106 148.971 10.7931C148.284 9.97563 147.239 9.56689 145.835 9.56689C144.151 9.56689 142.854 10.2249 141.944 11.5408C141.322 10.2249 140.177 9.56689 138.509 9.56689C136.945 9.56689 135.704 10.1292 134.787 11.2537L134.679 9.80615H131.435V22.75H134.894V13.5984Z" fill="black"/>
                </svg>
            </a>
          
<!--menu + logo version desktop-->
            <div class="menu_logo_container">
           <!--********************script menu****************-->
            <script src="main.js"></script>

                <a href="index.php">
                    <!--logo desktop -->
                    <svg  width="150" height="28" viewBox="0 0 150 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0159 7.51596C28.0159 10.2802 26.5388 12.6944 24.3401 14C26.5388 15.3056 28.0159 17.7198 28.0159 20.484C28.0159 24.6349 24.6872 28 20.5811 28C17.7303 28 15.2556 26.3772 14.008 23.9965C12.7603 26.3772 10.2856 28 7.43477 28C3.32871 28 0 24.6349 0 20.484C0 17.7198 1.47714 15.3056 3.67585 14C1.47714 12.6944 0 10.2802 0 7.51596C0 3.36506 3.32871 0 7.43477 0C10.2856 0 12.7603 1.62277 14.008 4.00348C15.2556 1.62277 17.7303 0 20.5811 0C24.6872 0 28.0159 3.36506 28.0159 7.51596ZM54.9272 21.4341C53.8579 22.2954 52.3337 22.734 50.3548 22.75H43.5799V5.33203H49.6845C51.7991 5.33203 53.403 5.73678 54.4963 6.54626C55.5895 7.35575 56.1361 8.54207 56.1361 10.1052C56.1361 10.9586 55.9167 11.7102 55.4778 12.3602C55.0389 13.0102 54.4284 13.4867 53.6464 13.7898C54.5402 14.0131 55.2444 14.4637 55.7591 15.1416C56.2738 15.8195 56.5311 16.6489 56.5311 17.6299C56.5311 19.3047 55.9965 20.5728 54.9272 21.4341ZM47.1708 12.6294H49.8281C51.6395 12.5975 52.5452 11.8757 52.5452 10.4641C52.5452 9.67456 52.3158 9.10632 51.857 8.7594C51.3981 8.41248 50.674 8.23901 49.6845 8.23901H47.1708V12.6294ZM50.247 19.8669H47.1708V15.1655H50.4625C52.1143 15.1895 52.9402 15.9989 52.9402 17.594C52.9402 18.3038 52.7028 18.8601 52.228 19.2628C51.7532 19.6656 51.0929 19.8669 50.247 19.8669ZM68.9348 22.75V25.4536H58.0304V22.75H68.9348ZM75.5691 22.9893C77.173 22.9893 78.4817 22.6244 79.4951 21.8947C80.5086 21.1649 81.0153 20.2099 81.0153 19.0295C81.0153 17.3787 80.1016 16.2183 78.2742 15.5483C77.6837 15.333 76.9576 15.1396 76.0957 14.9681C75.2339 14.7967 74.6215 14.5933 74.2584 14.358C73.8953 14.1228 73.7138 13.8137 73.7138 13.4309C73.7138 13.0242 73.8734 12.6892 74.1926 12.426C74.5117 12.1628 74.9626 12.0312 75.5451 12.0312C76.2234 12.0312 76.7222 12.1927 77.0413 12.5157C77.3605 12.8387 77.5201 13.2475 77.5201 13.7419H80.9794C80.9794 12.5058 80.4866 11.5009 79.5011 10.7273C78.5156 9.9537 77.2009 9.56689 75.5571 9.56689C74.017 9.56689 72.7702 9.9517 71.8166 10.7213C70.863 11.4909 70.3862 12.45 70.3862 13.5984C70.3862 15.5683 71.9263 16.8762 75.0065 17.5222C75.9322 17.7136 76.6045 17.931 77.0234 18.1742C77.4423 18.4174 77.6518 18.7504 77.6518 19.1731C77.6518 19.5798 77.4822 19.9088 77.1431 20.16C76.8039 20.4113 76.3032 20.5369 75.6409 20.5369C74.9307 20.5369 74.3641 20.3734 73.9412 20.0464C73.5183 19.7194 73.2908 19.2489 73.2589 18.6348H69.9792C69.9792 19.4163 70.2186 20.1441 70.6974 20.818C71.1762 21.4919 71.8365 22.0223 72.6784 22.4091C73.5203 22.7959 74.4838 22.9893 75.5691 22.9893ZM89.038 25.4417C88.264 27.1324 86.9872 27.9778 85.2077 27.9778C84.705 27.9778 84.1943 27.902 83.6756 27.7505V25.1306L84.2023 25.1426C84.8566 25.1426 85.3454 25.0429 85.6686 24.8435C85.9918 24.6441 86.2451 24.3132 86.4287 23.8506L86.8356 22.7859L82.2991 9.80615H86.0217L88.4276 17.8572L90.8215 9.80615H94.5321L89.3253 24.7598L89.038 25.4417ZM101.178 22.9893C102.782 22.9893 104.091 22.6244 105.104 21.8947C106.118 21.1649 106.625 20.2099 106.625 19.0295C106.625 17.3787 105.711 16.2183 103.884 15.5483C103.293 15.333 102.567 15.1396 101.705 14.9681C100.843 14.7967 100.231 14.5933 99.8677 14.358C99.5046 14.1228 99.3231 13.8137 99.3231 13.4309C99.3231 13.0242 99.4827 12.6892 99.8019 12.426C100.121 12.1628 100.572 12.0312 101.154 12.0312C101.833 12.0312 102.331 12.1927 102.651 12.5157C102.97 12.8387 103.129 13.2475 103.129 13.7419H106.589C106.589 12.5058 106.096 11.5009 105.11 10.7273C104.125 9.9537 102.81 9.56689 101.166 9.56689C99.6263 9.56689 98.3795 9.9517 97.4259 10.7213C96.4723 11.4909 95.9955 12.45 95.9955 13.5984C95.9955 15.5683 97.5356 16.8762 100.616 17.5222C101.541 17.7136 102.214 17.931 102.633 18.1742C103.052 18.4174 103.261 18.7504 103.261 19.1731C103.261 19.5798 103.092 19.9088 102.752 20.16C102.413 20.4113 101.913 20.5369 101.25 20.5369C100.54 20.5369 99.9734 20.3734 99.5505 20.0464C99.1276 19.7194 98.9002 19.2489 98.8682 18.6348H95.5885C95.5885 19.4163 95.8279 20.1441 96.3067 20.818C96.7855 21.4919 97.4458 22.0223 98.2877 22.4091C99.1296 22.7959 100.093 22.9893 101.178 22.9893ZM115.689 22.6782C115.01 22.8856 114.312 22.9893 113.594 22.9893C111.168 22.9893 109.931 21.7651 109.883 19.3167V12.3423H107.992V9.80615H109.883V6.62402H113.343V9.80615H115.557V12.3423H113.343V18.8022C113.343 19.2808 113.434 19.6237 113.618 19.8311C113.802 20.0384 114.153 20.1421 114.671 20.1421C115.054 20.1421 115.393 20.1142 115.689 20.0583V22.6782ZM123.795 22.9893C124.873 22.9893 125.854 22.7839 126.74 22.3732C127.626 21.9624 128.328 21.3902 128.846 20.6565L127.147 18.7544C126.397 19.7194 125.355 20.2019 124.023 20.2019C123.161 20.2019 122.449 19.9467 121.886 19.4363C121.324 18.9259 120.986 18.248 120.875 17.4026H129.122V15.991C129.122 13.9413 128.613 12.3582 127.596 11.2417C126.578 10.1252 125.184 9.56689 123.412 9.56689C122.231 9.56689 121.18 9.84403 120.258 10.3983C119.337 10.9526 118.624 11.7421 118.122 12.767C117.619 13.7918 117.368 14.9542 117.368 16.2542V16.5891C117.368 18.5271 117.964 20.0783 119.157 21.2427C120.35 22.4071 121.896 22.9893 123.795 22.9893ZM120.911 15.0459H125.722V14.7708C125.706 14.0051 125.499 13.413 125.1 12.9943C124.701 12.5756 124.134 12.3662 123.4 12.3662C122.714 12.3662 122.157 12.5975 121.731 13.0601C121.304 13.5226 121.03 14.1846 120.911 15.0459ZM134.894 13.5984C135.333 12.7849 136.043 12.3782 137.025 12.3782C137.735 12.3782 138.238 12.5457 138.533 12.8806C138.828 13.2156 138.976 13.7579 138.976 14.5076V22.75H142.435L142.423 13.8616C142.822 12.8726 143.54 12.3782 144.578 12.3782C145.304 12.3782 145.811 12.5476 146.098 12.8866C146.385 13.2255 146.529 13.7619 146.529 14.4956V22.75H150V14.4836C150 12.8407 149.657 11.6106 148.971 10.7931C148.284 9.97563 147.239 9.56689 145.835 9.56689C144.151 9.56689 142.854 10.2249 141.944 11.5408C141.322 10.2249 140.177 9.56689 138.509 9.56689C136.945 9.56689 135.704 10.1292 134.787 11.2537L134.679 9.80615H131.435V22.75H134.894V13.5984Z" fill="black"/>
                    </svg>
                </a>
            </div>
            <!-- menu -->
          
<!--acces + panier version mobile-->
            <div class="acces_panier_mobile">
              <a href="acces.php" class="acces__mobile">
                  <svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8.65681 9.6989H8.72041H8.74426H8.78401C9.94873 9.68026 10.8908 9.29633 11.5865 8.56202C13.1169 6.94429 12.8625 4.17105 12.8347 3.9064C12.7353 1.91965 11.7336 0.969145 10.9067 0.525575C10.2906 0.193829 9.57109 0.0149099 8.76811 0H8.74029H8.72439H8.70053C8.25929 0 7.39271 0.0670947 6.5619 0.510665C5.72712 0.954235 4.70948 1.90474 4.6101 3.9064C4.58227 4.17105 4.32786 6.94429 5.8583 8.56202C6.54998 9.29633 7.49209 9.68026 8.65681 9.6989ZM5.67386 3.98171L5.67386 3.9817C5.67475 3.97719 5.67555 3.97308 5.67555 3.96973C5.80673 1.29713 7.83008 1.01011 8.69667 1.01011H8.71257H8.74437C9.81766 1.03248 11.6423 1.4425 11.7655 3.96973C11.7655 3.98091 11.7655 3.9921 11.7695 3.99955C11.7734 4.02564 12.0517 6.56033 10.7876 7.89477C10.2867 8.42407 9.6189 8.68499 8.74039 8.69245H8.72052H8.70064C7.82611 8.68499 7.15431 8.42407 6.65741 7.89477C5.39729 6.56778 5.6676 4.02192 5.67157 3.99955C5.67157 3.9934 5.67278 3.98724 5.67386 3.98171ZM16.8895 14.2874V14.2986C16.8935 14.4924 16.8975 15.4877 16.6987 15.9834C16.659 16.0803 16.5835 16.1623 16.492 16.2182L16.4903 16.2192C16.3481 16.3038 13.4941 18 8.73253 18C3.95041 18 1.09228 16.2928 0.973023 16.2182C0.877619 16.1623 0.806066 16.0803 0.766315 15.9834C0.555632 15.4839 0.559607 14.4887 0.563582 14.2949V14.2837C0.567557 14.2539 0.567557 14.224 0.567557 14.1905L0.56774 14.1849C0.591682 13.4474 0.647473 11.7289 2.3683 11.175L2.36833 11.175C2.38025 11.1712 2.39217 11.1675 2.40805 11.1638C4.2088 10.7351 5.69153 9.76597 5.70743 9.75479C5.94992 9.59451 6.28383 9.65042 6.45476 9.8778C6.62569 10.1052 6.56607 10.4183 6.32358 10.5786C6.32055 10.5804 6.31447 10.5842 6.30545 10.5899C6.11329 10.7114 4.5851 11.6772 2.69427 12.1329C1.76805 12.4423 1.6647 13.3704 1.63687 14.2203C1.63687 14.2376 1.63582 14.2539 1.6348 14.2697C1.63383 14.2846 1.6329 14.299 1.6329 14.3135C1.62495 14.649 1.65277 15.1671 1.71638 15.4653C2.36433 15.8082 4.90445 16.9973 8.72855 16.9973C12.5686 16.9973 15.0928 15.8119 15.7367 15.469C15.8004 15.1708 15.8242 14.6527 15.8202 14.3172C15.8163 14.2874 15.8163 14.2576 15.8163 14.224C15.7884 13.3742 15.6851 12.446 14.7589 12.1367C12.7792 11.6595 11.1971 10.627 11.1295 10.5823C10.8871 10.422 10.8274 10.1089 10.9984 9.88153C11.1693 9.65415 11.5032 9.59824 11.7457 9.75852C11.7616 9.7697 13.2523 10.7388 15.0451 11.1675C15.051 11.1694 15.058 11.1712 15.0649 11.1731C15.0719 11.175 15.0789 11.1768 15.0848 11.1787C16.8059 11.729 16.8615 13.448 16.8854 14.1889L16.8856 14.1942C16.8856 14.2115 16.8866 14.2278 16.8876 14.2436C16.8886 14.2585 16.8895 14.2729 16.8895 14.2874Z" fill="black"/>
                  </svg>
              </a>
              <a href="panier.php">
                  <svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7465 14.6633L15.75 4.14534C15.7293 3.91174 15.5258 3.73486 15.2879 3.73486H12.3319C12.3042 1.98026 10.8212 0.5625 8.99994 0.5625C7.17883 0.5625 5.69578 1.98026 5.66815 3.73486C5.66815 3.73486 2.95345 3.73486 2.71214 3.73486C2.47083 3.73486 2.27074 3.91174 2.25 4.14534L2.25336 14.6633C2.25336 14.6767 2.25 14.6901 2.25 14.7034C2.25 15.901 3.38477 16.875 4.78163 16.875H13.2182C14.6152 16.875 15.75 15.901 15.75 14.7034C15.75 14.6901 15.75 14.6767 15.7465 14.6633ZM8.99994 1.46328C10.3072 1.46328 11.3731 2.47739 11.4005 3.73486H6.59933C6.62697 2.47739 7.69267 1.46328 8.99994 1.46328ZM13.2182 15.9744H4.78163C3.9055 15.9744 3.19515 15.4139 3.18136 14.7235V4.63905H5.66461V6.00664C5.66461 6.25684 5.8716 6.45699 6.13029 6.45699C6.38897 6.45699 6.59597 6.25684 6.59597 6.00664V4.63905H11.4005V6.00664C11.4005 6.25684 11.6075 6.45699 11.8662 6.45699C12.1249 6.45699 12.3319 6.25684 12.3319 6.00664V4.63905H14.7825V14.7235C14.7687 15.4139 14.091 15.9744 13.2182 15.9744Z" fill="black"/>
                  </svg>
              </a>
            </div>
<!--acces + panier version desktop-->
            <form class="input">
                <input class="input_recherche" type="text" placeholder="Search..">
              <i class="loupe" href="#"> <svg   fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"/></svg></i>
               
            </form>


            <div class="acces_panier">
                
                
                <a class="flex_acces_panier"  href="acces.php">
                    <div class="text_acces_panier">Accès</div>
                    <div href="#">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.65681 9.6989H8.72041H8.74426H8.78401C9.94873 9.68026 10.8908 9.29633 11.5865 8.56202C13.1169 6.94429 12.8625 4.17105 12.8347 3.9064C12.7353 1.91965 11.7336 0.969145 10.9067 0.525575C10.2906 0.193829 9.57109 0.0149099 8.76811 0H8.74029H8.72439H8.70053C8.25929 0 7.39271 0.0670947 6.5619 0.510665C5.72712 0.954235 4.70948 1.90474 4.6101 3.9064C4.58227 4.17105 4.32786 6.94429 5.8583 8.56202C6.54998 9.29633 7.49209 9.68026 8.65681 9.6989ZM5.67386 3.98171L5.67386 3.9817C5.67475 3.97719 5.67555 3.97308 5.67555 3.96973C5.80673 1.29713 7.83008 1.01011 8.69667 1.01011H8.71257H8.74437C9.81766 1.03248 11.6423 1.4425 11.7655 3.96973C11.7655 3.98091 11.7655 3.9921 11.7695 3.99955C11.7734 4.02564 12.0517 6.56033 10.7876 7.89477C10.2867 8.42407 9.6189 8.68499 8.74039 8.69245H8.72052H8.70064C7.82611 8.68499 7.15431 8.42407 6.65741 7.89477C5.39729 6.56778 5.6676 4.02192 5.67157 3.99955C5.67157 3.9934 5.67278 3.98724 5.67386 3.98171ZM16.8895 14.2874V14.2986C16.8935 14.4924 16.8975 15.4877 16.6987 15.9834C16.659 16.0803 16.5835 16.1623 16.492 16.2182L16.4903 16.2192C16.3481 16.3038 13.4941 18 8.73253 18C3.95041 18 1.09228 16.2928 0.973023 16.2182C0.877619 16.1623 0.806066 16.0803 0.766315 15.9834C0.555632 15.4839 0.559607 14.4887 0.563582 14.2949V14.2837C0.567557 14.2539 0.567557 14.224 0.567557 14.1905L0.56774 14.1849C0.591682 13.4474 0.647473 11.7289 2.3683 11.175L2.36833 11.175C2.38025 11.1712 2.39217 11.1675 2.40805 11.1638C4.2088 10.7351 5.69153 9.76597 5.70743 9.75479C5.94992 9.59451 6.28383 9.65042 6.45476 9.8778C6.62569 10.1052 6.56607 10.4183 6.32358 10.5786C6.32055 10.5804 6.31447 10.5842 6.30545 10.5899C6.11329 10.7114 4.5851 11.6772 2.69427 12.1329C1.76805 12.4423 1.6647 13.3704 1.63687 14.2203C1.63687 14.2376 1.63582 14.2539 1.6348 14.2697C1.63383 14.2846 1.6329 14.299 1.6329 14.3135C1.62495 14.649 1.65277 15.1671 1.71638 15.4653C2.36433 15.8082 4.90445 16.9973 8.72855 16.9973C12.5686 16.9973 15.0928 15.8119 15.7367 15.469C15.8004 15.1708 15.8242 14.6527 15.8202 14.3172C15.8163 14.2874 15.8163 14.2576 15.8163 14.224C15.7884 13.3742 15.6851 12.446 14.7589 12.1367C12.7792 11.6595 11.1971 10.627 11.1295 10.5823C10.8871 10.422 10.8274 10.1089 10.9984 9.88153C11.1693 9.65415 11.5032 9.59824 11.7457 9.75852C11.7616 9.7697 13.2523 10.7388 15.0451 11.1675C15.051 11.1694 15.058 11.1712 15.0649 11.1731C15.0719 11.175 15.0789 11.1768 15.0848 11.1787C16.8059 11.729 16.8615 13.448 16.8854 14.1889L16.8856 14.1942C16.8856 14.2115 16.8866 14.2278 16.8876 14.2436C16.8886 14.2585 16.8895 14.2729 16.8895 14.2874Z" fill="black"/>
                        </svg>
                    </div>
                </a>

                <a class="flex_acces_panier" href="panier.php">
                    <div class="text_acces_panier">Panier</div>
                    <div href="#">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7465 14.6633L15.75 4.14534C15.7293 3.91174 15.5258 3.73486 15.2879 3.73486H12.3319C12.3042 1.98026 10.8212 0.5625 8.99994 0.5625C7.17883 0.5625 5.69578 1.98026 5.66815 3.73486C5.66815 3.73486 2.95345 3.73486 2.71214 3.73486C2.47083 3.73486 2.27074 3.91174 2.25 4.14534L2.25336 14.6633C2.25336 14.6767 2.25 14.6901 2.25 14.7034C2.25 15.901 3.38477 16.875 4.78163 16.875H13.2182C14.6152 16.875 15.75 15.901 15.75 14.7034C15.75 14.6901 15.75 14.6767 15.7465 14.6633ZM8.99994 1.46328C10.3072 1.46328 11.3731 2.47739 11.4005 3.73486H6.59933C6.62697 2.47739 7.69267 1.46328 8.99994 1.46328ZM13.2182 15.9744H4.78163C3.9055 15.9744 3.19515 15.4139 3.18136 14.7235V4.63905H5.66461V6.00664C5.66461 6.25684 5.8716 6.45699 6.13029 6.45699C6.38897 6.45699 6.59597 6.25684 6.59597 6.00664V4.63905H11.4005V6.00664C11.4005 6.25684 11.6075 6.45699 11.8662 6.45699C12.1249 6.45699 12.3319 6.25684 12.3319 6.00664V4.63905H14.7825V14.7235C14.7687 15.4139 14.091 15.9744 13.2182 15.9744Z" fill="black"/>
                        </svg>
                    </div>
                </a>
            </div>
        </nav>

        <div class="trait_dessus"></div>
        <h1>
            Catégorie de produits 
        </h1>
        <div class="accueil">
            <a class="text_accueil" href="#">Accueil</a>
        <div class="fleche"> > </div>
        <a class="text_categorie" href="index.php">Catégorie de produits </a>
        </div> 
    </header>
   
    <section id="prduit1" class="section_p1">
      <div class="pro_container">

        <div>
            <div class="pro">
               <a href="produit.php"><img src="Image\drone2.jpg" alt="produit"></a>
            </div>
            <div class="description">
                <h3 class="nom_produit">nom produit</h3>
                <p class="prix_produit"> $55.99</p>
            </div>
        </div>

        <div>
            <div class="pro">
                <img src="Image\drone2.jpg" alt="produit">

            </div>
            <div class="description">
                <h3 class="nom_produit">nom produit</h3>
                <p class="prix_produit"> $55.99</p>
            </div>
        </div>

        <div>
            <div class="pro">
                <img src="Image\drone2.jpg" alt="produit">

            </div>
            <div class="description">
                <h3 class="nom_produit">nom produit</h3>
                <p class="prix_produit"> $55.99</p>
            </div>
        </div>

       
      </div>
    </section>

























    <footer>
    <div class="svg_flex">
        <div>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.75 15.145C12.75 13.262 11.8435 11.8701 9.97064 11.3484C11.3371 10.7054 12.0497 9.7313 12.0497 8.21612C12.0497 5.22855 9.78913 4.5 7.18096 4.5H0V19.5H7.38207C10.1501 19.5 12.75 18.1927 12.75 15.145ZM3.34776 7.06065H6.48911C7.69676 7.06065 8.78376 7.39487 8.78376 8.77453C8.78376 10.0482 7.93809 10.5608 6.74178 10.5608H3.34776V7.06065ZM3.34638 12.8218V16.9526H6.92603C8.28839 16.9526 9.40116 16.4788 9.40116 14.9636C9.40116 13.427 8.46886 12.8218 6.99513 12.8218H3.34638ZM23.8073 15.9112C23.0241 18.3518 21.3967 19.5 18.8839 19.5C15.5622 19.5 13.5 17.2206 13.5 13.897C13.5 10.6946 15.6764 8.25 18.8829 8.25C22.3462 8.25 24.2195 11.1661 23.9795 14.5878H16.3907C16.3907 16.2976 17.2801 17.3037 18.9734 17.3037C19.851 17.3037 20.9825 16.8221 21.257 15.9112H23.8073ZM21.0967 12.7438C20.9747 11.3292 20.2446 10.4643 18.7934 10.4643C17.4081 10.4643 16.4901 11.3413 16.3946 12.7438H21.0967ZM21.75 5.25H15.75V6.75H21.75V5.25Z" fill="black"/>
            </svg>
        </div>
        <div>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.3482 7.38589C21.1234 6.55069 20.4648 5.89231 19.6295 5.66742C18.1036 5.25 11.9997 5.25 11.9997 5.25C11.9997 5.25 5.89613 5.25 4.37019 5.65159C3.55099 5.87625 2.87627 6.55081 2.65157 7.38589C2.25 8.91136 2.25 12.075 2.25 12.075C2.25 12.075 2.25 15.2545 2.65157 16.7641C2.87651 17.5991 3.53492 18.2575 4.37031 18.4824C5.91219 18.8999 12 18.8999 12 18.8999C12 18.8999 18.1036 18.8999 19.6295 18.4984C20.4649 18.2736 21.1234 17.6152 21.3484 16.7801C21.7498 15.2545 21.7498 12.091 21.7498 12.091C21.7498 12.091 21.7659 8.91136 21.3482 7.38589ZM10.0499 14.9999V9.14993L15.2498 12.0749L10.0499 14.9999Z" fill="black"/>
            </svg>
        </div>
        <div>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2763 2.25C6.70915 2.25083 3.75 5.7524 3.75 9.57049C3.75 11.3408 4.75782 13.5497 6.37152 14.2501C6.83185 14.4536 6.77092 14.2052 7.16694 12.7182C7.19825 12.5944 7.18218 12.4872 7.08063 12.3717C4.7739 9.75242 6.63046 4.36756 11.9471 4.36756C19.6416 4.36756 18.2039 14.8199 13.2858 14.8199C12.0182 14.8199 11.0738 13.843 11.3725 12.6343C11.7347 11.1946 12.4438 9.64692 12.4438 8.60932C12.4438 5.99415 8.47517 6.38211 8.47517 9.84713C8.47517 10.918 8.86103 11.6407 8.86103 11.6407C8.86103 11.6407 7.58412 16.7049 7.34718 17.6511C6.94609 19.2528 7.40134 21.8455 7.44111 22.069C7.46565 22.1919 7.60612 22.231 7.68482 22.1296C7.8109 21.9676 9.35436 19.806 9.78677 18.2434C9.94416 17.6744 10.5898 15.3649 10.5898 15.3649C11.0154 16.1192 12.2424 16.7506 13.5498 16.7506C17.4389 16.7506 20.25 13.3944 20.25 9.22989C20.2365 5.23734 16.7561 2.25 12.2763 2.25Z" fill="black"/>
            </svg>
        </div>
        <div>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.75 6.32333C21.0527 6.63255 20.3098 6.83752 19.5352 6.93704C20.332 6.45603 20.9402 5.70015 21.2262 4.78908C20.4832 5.23692 19.6629 5.55325 18.7887 5.72977C18.0832 4.97035 17.0777 4.5 15.9809 4.5C13.8527 4.5 12.1395 6.24633 12.1395 8.38717C12.1395 8.69521 12.1652 8.9914 12.2285 9.27337C9.03281 9.1158 6.20508 7.56732 4.30547 5.20848C3.97383 5.7902 3.7793 6.45603 3.7793 7.1728C3.7793 8.51868 4.46484 9.71173 5.48672 10.4024C4.86914 10.3906 4.26328 10.2093 3.75 9.9238C3.75 9.93565 3.75 9.95105 3.75 9.96645C3.75 11.8549 5.08242 13.4236 6.82969 13.7849C6.5168 13.8714 6.17578 13.9129 5.82188 13.9129C5.57578 13.9129 5.32734 13.8986 5.09414 13.8465C5.59219 15.3855 7.00547 16.5169 8.68594 16.5537C7.37813 17.588 5.71758 18.2111 3.91992 18.2111C3.60469 18.2111 3.30234 18.1969 3 18.1578C4.70273 19.2679 6.7207 19.9018 8.89688 19.9018C15.9703 19.9018 19.8375 13.978 19.8375 8.8433C19.8375 8.67151 19.8316 8.50565 19.8234 8.34097C20.5863 7.79361 21.2273 7.11001 21.75 6.32333Z" fill="black"/>
            </svg>
        </div>
        <div>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 5.31129C3.75 4.03535 4.7902 3 6.07212 3C7.35323 3 8.39343 4.03535 8.39423 5.31129C8.39423 6.58723 7.35403 7.64423 6.07212 7.64423C4.7902 7.64423 3.75 6.58723 3.75 5.31129ZM3.75 8.30764H7.73077V20.2499H3.75V8.30764ZM20.9958 20.2499V20.2492H21.0002V13.8498C21.0002 10.7192 20.3261 8.30764 16.6656 8.30764C14.9059 8.30764 13.725 9.27314 13.2429 10.1885H13.192V8.59991H9.7213V20.2492H13.3352V14.4809C13.3352 12.9621 13.6232 11.4935 15.5043 11.4935C17.3578 11.4935 17.3855 13.2268 17.3855 14.5783V20.2499H20.9958Z" fill="black"/>
            </svg>
        </div>
    </div>
    <div class="trait_dessus"></div>
        <div class="logo_noir">
            <svg width="108" height="20" viewBox="0 0 108 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0114 5.36855C20.0114 7.343 18.9563 9.06742 17.3858 10C18.9563 10.9326 20.0114 12.657 20.0114 14.6315C20.0114 17.5964 17.6337 20 14.7008 20C12.6645 20 10.8969 18.8409 10.0057 17.1404C9.1145 18.8409 7.34688 20 5.31055 20C2.37765 20 0 17.5964 0 14.6315C0 12.657 1.0551 10.9326 2.6256 10C1.0551 9.06742 0 7.343 0 5.36855C0 2.40362 2.37765 0 5.31055 0C7.34688 0 9.1145 1.15912 10.0057 2.85963C10.8969 1.15912 12.6645 0 14.7008 0C17.6337 0 20.0114 2.40362 20.0114 5.36855ZM39.2337 15.3101C38.4699 15.9253 37.3812 16.2386 35.9676 16.25H31.1285V3.80859H35.4889C36.9993 3.80859 38.145 4.0977 38.9259 4.6759C39.7067 5.25411 40.0972 6.10148 40.0972 7.21802C40.0972 7.82756 39.9404 8.36446 39.6269 8.82874C39.3135 9.29301 38.8774 9.63338 38.3188 9.84985C38.9572 10.0094 39.4602 10.3312 39.8279 10.8154C40.1955 11.2996 40.3793 11.8921 40.3793 12.5928C40.3793 13.7891 39.9974 14.6948 39.2337 15.3101ZM33.6931 9.021H35.5912C36.8851 8.99821 37.532 8.48267 37.532 7.47437C37.532 6.9104 37.3681 6.50452 37.0404 6.25671C36.7126 6.00891 36.1954 5.88501 35.4886 5.88501H33.6931V9.021ZM35.8904 14.1907H33.6931V10.8325H36.0443C37.2242 10.8496 37.8141 11.4278 37.8141 12.5671C37.8141 13.0741 37.6446 13.4715 37.3054 13.7592C36.9663 14.0468 36.4946 14.1907 35.8904 14.1907ZM49.2389 16.25V18.1812H41.4501V16.25H49.2389ZM53.9781 16.4209C55.1238 16.4209 56.0586 16.1603 56.7824 15.639C57.5063 15.1178 57.8683 14.4356 57.8683 13.5925C57.8683 12.4133 57.2156 11.5845 55.9104 11.106C55.4886 10.9521 54.9699 10.814 54.3543 10.6915C53.7387 10.5691 53.3013 10.4238 53.0419 10.2557C52.7826 10.0877 52.6529 9.86694 52.6529 9.59351C52.6529 9.30298 52.7669 9.06372 52.9949 8.87573C53.2229 8.68774 53.5449 8.59375 53.961 8.59375C54.4455 8.59375 54.8018 8.70911 55.0297 8.93982C55.2577 9.17053 55.3717 9.46248 55.3717 9.81567H57.8426C57.8426 8.9327 57.4907 8.21493 56.7867 7.66235C56.0828 7.10978 55.1437 6.8335 53.9696 6.8335C52.8695 6.8335 51.9789 7.10836 51.2978 7.65808C50.6166 8.2078 50.2761 8.89282 50.2761 9.71313C50.2761 11.1202 51.3761 12.0544 53.5763 12.5159C54.2375 12.6526 54.7177 12.8078 55.0169 12.9816C55.3162 13.1553 55.4658 13.3931 55.4658 13.6951C55.4658 13.9856 55.3447 14.2206 55.1024 14.4C54.8602 14.5795 54.5025 14.6692 54.0294 14.6692C53.5221 14.6692 53.1174 14.5524 52.8153 14.3188C52.5133 14.0853 52.3508 13.7492 52.328 13.3105H49.9854C49.9854 13.8688 50.1564 14.3886 50.4984 14.87C50.8404 15.3514 51.312 15.7302 51.9133 16.0065C52.5147 16.2828 53.2029 16.4209 53.9781 16.4209ZM63.5987 18.1726C63.0458 19.3803 62.1338 19.9841 60.8628 19.9841C60.5037 19.9841 60.1389 19.93 59.7684 19.8218V17.9504L60.1446 17.959C60.612 17.959 60.9611 17.8878 61.1919 17.7454C61.4228 17.6029 61.6037 17.3665 61.7348 17.0361L62.0255 16.2756L58.7852 7.00439H61.4441L63.1627 12.7551L64.8726 7.00439H67.523L63.8039 17.6855L63.5987 18.1726ZM72.2705 16.4209C73.4161 16.4209 74.3509 16.1603 75.0748 15.639C75.7987 15.1178 76.1606 14.4356 76.1606 13.5925C76.1606 12.4133 75.508 11.5845 74.2027 11.106C73.7809 10.9521 73.2622 10.814 72.6467 10.6915C72.0311 10.5691 71.5936 10.4238 71.3343 10.2557C71.0749 10.0877 70.9453 9.86694 70.9453 9.59351C70.9453 9.30298 71.0592 9.06372 71.2872 8.87573C71.5152 8.68774 71.8373 8.59375 72.2534 8.59375C72.7379 8.59375 73.0941 8.70911 73.3221 8.93982C73.5501 9.17053 73.6641 9.46248 73.6641 9.81567H76.135C76.135 8.9327 75.783 8.21493 75.0791 7.66235C74.3751 7.10978 73.4361 6.8335 72.2619 6.8335C71.1618 6.8335 70.2712 7.10836 69.5901 7.65808C68.909 8.2078 68.5684 8.89282 68.5684 9.71313C68.5684 11.1202 69.6685 12.0544 71.8686 12.5159C72.5298 12.6526 73.01 12.8078 73.3093 12.9816C73.6085 13.1553 73.7581 13.3931 73.7581 13.6951C73.7581 13.9856 73.637 14.2206 73.3948 14.4C73.1525 14.5795 72.7949 14.6692 72.3218 14.6692C71.8145 14.6692 71.4098 14.5524 71.1077 14.3188C70.8056 14.0853 70.6432 13.7492 70.6204 13.3105H68.2777C68.2777 13.8688 68.4487 14.3886 68.7907 14.87C69.1327 15.3514 69.6044 15.7302 70.2057 16.0065C70.807 16.2828 71.4953 16.4209 72.2705 16.4209ZM82.6348 16.1987C82.1503 16.3468 81.6516 16.4209 81.1386 16.4209C79.4059 16.4209 78.5224 15.5465 78.4882 13.7976V8.81592H77.1373V7.00439H78.4882V4.73145H80.9591V7.00439H82.5408V8.81592H80.9591V13.4302C80.9591 13.772 81.0246 14.0169 81.1557 14.165C81.2868 14.3132 81.5376 14.3872 81.9081 14.3872C82.1817 14.3872 82.4239 14.3673 82.6348 14.3274V16.1987ZM88.4253 16.4209C89.1948 16.4209 89.8959 16.2742 90.5286 15.9808C91.1612 15.6875 91.6628 15.2787 92.0333 14.7546L90.8193 13.396C90.2835 14.0853 89.5396 14.4299 88.5878 14.4299C87.9722 14.4299 87.4635 14.2476 87.0616 13.8831C86.6598 13.5185 86.419 13.0343 86.3392 12.4304H92.23V11.4221C92.23 9.95809 91.8666 8.82731 91.1399 8.02979C90.4131 7.23226 89.4171 6.8335 88.1517 6.8335C87.3081 6.8335 86.5572 7.03145 85.8988 7.42737C85.2405 7.82328 84.7318 8.38725 84.3727 9.11926C84.0136 9.85128 83.8341 10.6816 83.8341 11.6101V11.8494C83.8341 13.2336 84.2601 14.3416 85.1123 15.1733C85.9644 16.005 87.0687 16.4209 88.4253 16.4209ZM86.3648 10.7471H89.8018V10.5505C89.7904 10.0037 89.6422 9.58069 89.3572 9.28162C89.0723 8.98254 88.6676 8.83301 88.1432 8.83301C87.653 8.83301 87.2554 8.99821 86.9505 9.32861C86.6455 9.65902 86.4503 10.1318 86.3648 10.7471ZM96.3529 9.71313C96.6664 9.13208 97.1737 8.84155 97.8748 8.84155C98.382 8.84155 98.7411 8.96118 98.952 9.20044C99.1629 9.4397 99.2684 9.82707 99.2684 10.3625V16.25H101.739L101.731 9.90112C102.016 9.19474 102.529 8.84155 103.27 8.84155C103.788 8.84155 104.15 8.96261 104.355 9.20471C104.561 9.44682 104.663 9.82992 104.663 10.354V16.25H107.143V10.3455C107.143 9.17196 106.898 8.29325 106.407 7.70935C105.917 7.12545 105.171 6.8335 104.167 6.8335C102.965 6.8335 102.038 7.30347 101.389 8.24341C100.944 7.30347 100.126 6.8335 98.9349 6.8335C97.8178 6.8335 96.9314 7.23511 96.2759 8.03833L96.199 7.00439H93.882V16.25H96.3529V9.71313Z" fill="black"/>
            </svg>
        </div>
        <p class="footer_text">
            Organic Design System. © 2019 B_system. All rights reserved example. <br>
            Customer Service: 010 210 465
        </p>
    </footer>
</body>
</html>