<!DOCTYPE html>
<html lang="en">

<head>
  <title>glowy - Skincare Products Ecommerce Website Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="TemplatesJungle">
  <meta name="keywords" content="html,css,template">
  <meta name="description" content="Bootstrap 5 Flores Skincare Products HTML CSS Template">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
    rel="stylesheet">

</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 24 24">
      <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M11 17h8M5 12h14m-8-5h8" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="hand" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M15.583 1.42c1.312.441 2.167 1.676 2.167 3.295c0 1.017-.578 1.954-1.223 2.7c-.663.769-1.501 1.458-2.235 1.993l-.093.068c-.712.52-1.3.95-2.199.95c-.9 0-1.486-.43-2.198-.95l-.094-.068c-.734-.535-1.572-1.224-2.235-1.992C6.83 6.669 6.25 5.732 6.25 4.715c0-1.619.855-2.853 2.167-3.295c1.12-.377 2.422-.128 3.583.717c1.161-.845 2.464-1.094 3.583-.717m-.478 1.422c-.652-.22-1.625-.078-2.597.816a.75.75 0 0 1-1.015 0c-.973-.894-1.945-1.036-2.597-.816c-.626.21-1.146.814-1.146 1.873c0 .467.285 1.055.859 1.721c.556.645 1.292 1.257 1.983 1.76c.843.615 1.043.73 1.408.73s.565-.115 1.409-.73c.69-.503 1.426-1.115 1.982-1.76c.575-.666.86-1.254.86-1.721c0-1.06-.521-1.663-1.146-1.873M8.684 14.448c1.866-.362 3.863-.28 5.48.684c.226.135.44.304.625.512c.376.422.57.947.579 1.473q.286-.186.577-.407l1.808-1.365a2.64 2.64 0 0 1 3.124 0c.835.63 1.169 1.763.57 2.722c-.425.682-1.065 1.625-1.717 2.229c-.66.61-1.597 1.123-2.306 1.466c-.862.416-1.792.645-2.697.792c-1.85.3-3.774.253-5.602-.123a14.3 14.3 0 0 0-2.865-.293H4a.75.75 0 0 1 0-1.5h2.26c1.062 0 2.135.11 3.168.324a14.1 14.1 0 0 0 5.06.111c.828-.134 1.602-.333 2.284-.662c.683-.33 1.451-.764 1.938-1.216c.493-.456 1.044-1.247 1.465-1.921c.127-.204.109-.498-.202-.733a1.14 1.14 0 0 0-1.316 0l-1.807 1.366c-.722.545-1.61 1.128-2.711 1.303a9 9 0 0 1-.347.049q-.086.015-.179.02a10 10 0 0 1-1.932 0a.75.75 0 1 1 .141-1.493c.628.059 1.19.046 1.668-.003l.03-.003a.742.742 0 0 0 .15-1.138a1.2 1.2 0 0 0-.275-.222c-1.181-.705-2.759-.822-4.426-.5a12.1 12.1 0 0 0-4.535 1.935a.75.75 0 0 1-.868-1.224a13.6 13.6 0 0 1 5.118-2.183"
        clip-rule="evenodd" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="water" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M12.717 3.75a.974.974 0 0 0-1.434 0c-.572.604-1.224 1.358-1.728 2.121c-.522.792-.805 1.475-.805 1.962c0 1.916 1.484 3.417 3.25 3.417s3.25-1.5 3.25-3.417c0-.487-.283-1.17-.805-1.962c-.504-.763-1.156-1.517-1.728-2.12M10.194 2.72a2.474 2.474 0 0 1 3.612 0c.6.634 1.318 1.46 1.89 2.326c.554.838 1.054 1.836 1.054 2.788c0 2.686-2.098 4.917-4.75 4.917s-4.75-2.23-4.75-4.917c0-.952.5-1.95 1.054-2.788c.572-.867 1.29-1.692 1.89-2.326M6.717 13.75a.974.974 0 0 0-1.434 0c-.572.603-1.224 1.357-1.728 2.12c-.522.792-.805 1.475-.805 1.962c0 1.916 1.484 3.417 3.25 3.417s3.25-1.5 3.25-3.417c0-.487-.283-1.17-.805-1.962c-.504-.763-1.156-1.517-1.728-2.12m-2.523-1.032a2.474 2.474 0 0 1 3.612 0c.6.634 1.318 1.46 1.89 2.326c.554.838 1.054 1.836 1.054 2.788c0 2.686-2.098 4.917-4.75 4.917s-4.75-2.23-4.75-4.917c0-.952.5-1.95 1.054-2.788c.572-.867 1.29-1.692 1.89-2.326m14.523 1.032a.974.974 0 0 0-1.434 0c-.572.603-1.224 1.357-1.728 2.12c-.522.792-.805 1.475-.805 1.962c0 1.916 1.484 3.417 3.25 3.417s3.25-1.5 3.25-3.417c0-.487-.283-1.17-.805-1.962c-.504-.763-1.156-1.517-1.728-2.12m-2.523-1.032a2.474 2.474 0 0 1 3.612 0c.6.634 1.318 1.46 1.89 2.326c.554.838 1.054 1.836 1.054 2.788c0 2.686-2.098 4.917-4.75 4.917s-4.75-2.23-4.75-4.917c0-.952.5-1.95 1.054-2.788c.572-.867 1.29-1.692 1.89-2.326"
        clip-rule="evenodd" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="verify" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M10.594 2.319a3.26 3.26 0 0 1 2.812 0c.387.185.74.487 1.231.905l.078.066c.238.203.313.265.389.316c.193.13.41.219.637.264c.09.018.187.027.499.051l.101.008c.642.051 1.106.088 1.51.23a3.27 3.27 0 0 1 1.99 1.99c.142.404.178.868.23 1.51l.008.101c.024.312.033.41.051.499c.045.228.135.445.264.638c.051.075.113.15.316.388l.066.078c.419.49.72.844.905 1.23c.425.89.425 1.924 0 2.813c-.184.387-.486.74-.905 1.231l-.066.078a5 5 0 0 0-.316.389c-.13.193-.219.41-.264.637c-.018.09-.026.187-.051.499l-.009.101c-.05.642-.087 1.106-.23 1.51a3.26 3.26 0 0 1-1.989 1.99c-.404.142-.868.178-1.51.23l-.101.008a5 5 0 0 0-.499.051a1.8 1.8 0 0 0-.637.264a5 5 0 0 0-.39.316l-.077.066c-.49.419-.844.72-1.23.905a3.26 3.26 0 0 1-2.813 0c-.387-.184-.74-.486-1.231-.905l-.078-.066a5 5 0 0 0-.388-.316a1.8 1.8 0 0 0-.638-.264a5 5 0 0 0-.499-.051l-.101-.009c-.642-.05-1.106-.087-1.51-.23a3.26 3.26 0 0 1-1.99-1.989c-.142-.404-.179-.868-.23-1.51l-.008-.101a5 5 0 0 0-.051-.499a1.8 1.8 0 0 0-.264-.637a5 5 0 0 0-.316-.39l-.066-.077c-.418-.49-.72-.844-.905-1.23a3.26 3.26 0 0 1 0-2.813c.185-.387.487-.74.905-1.231l.066-.078a5 5 0 0 0 .316-.388c.13-.193.219-.41.264-.638c.018-.09.027-.187.051-.499l.008-.101c.051-.642.088-1.106.23-1.51a3.26 3.26 0 0 1 1.99-1.99c.404-.142.868-.179 1.51-.23l.101-.008a5 5 0 0 0 .499-.051c.228-.045.445-.135.638-.264c.075-.051.15-.113.388-.316l.078-.066c.49-.418.844-.72 1.23-.905m2.163 1.358a1.76 1.76 0 0 0-1.514 0c-.185.088-.38.247-.981.758l-.03.025c-.197.168-.34.291-.497.396c-.359.24-.761.407-1.185.49c-.185.037-.373.052-.632.073l-.038.003c-.787.063-1.036.089-1.23.157c-.5.177-.894.57-1.07 1.071c-.07.194-.095.443-.158 1.23l-.003.038c-.02.259-.036.447-.072.632c-.084.424-.25.826-.49 1.185c-.106.157-.229.3-.397.498l-.025.029c-.511.6-.67.796-.758.98a1.76 1.76 0 0 0 0 1.515c.088.185.247.38.758.981l.025.03c.168.197.291.34.396.497c.24.359.407.761.49 1.185c.037.185.052.373.073.632l.003.038c.063.787.089 1.036.157 1.23c.177.5.57.894 1.071 1.07c.194.07.443.095 1.23.158l.038.003c.259.02.447.036.632.072c.424.084.826.25 1.185.49c.157.106.3.229.498.397l.029.025c.6.511.796.67.98.758a1.76 1.76 0 0 0 1.515 0c.185-.088.38-.247.981-.758l.03-.025c.197-.168.34-.291.497-.396c.359-.24.761-.407 1.185-.49a6 6 0 0 1 .632-.073l.038-.003c.787-.063 1.036-.089 1.23-.157c.5-.177.894-.57 1.07-1.071c.07-.194.095-.444.158-1.23l.003-.038a6 6 0 0 1 .072-.633c.084-.423.25-.825.49-1.184c.106-.157.229-.3.397-.498l.025-.029c.511-.6.67-.796.758-.98a1.76 1.76 0 0 0 0-1.515c-.088-.185-.247-.38-.758-.981l-.025-.03c-.168-.197-.291-.34-.396-.497a3.3 3.3 0 0 1-.49-1.185a6 6 0 0 1-.073-.632l-.003-.038c-.063-.787-.089-1.036-.157-1.23c-.177-.5-.57-.894-1.071-1.07c-.194-.07-.444-.095-1.23-.158l-.038-.003a6 6 0 0 1-.633-.072a3.3 3.3 0 0 1-1.184-.49c-.157-.106-.3-.229-.498-.397l-.029-.025c-.6-.511-.796-.67-.98-.758m3.287 5.282a.75.75 0 0 1 0 1.065l-5.017 5.017a.753.753 0 0 1-1.064 0l-2.007-2.007A.753.753 0 1 1 9.02 11.97l1.475 1.474L14.98 8.96a.753.753 0 0 1 1.064 0"
        clip-rule="evenodd" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="world" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M5.578 5.343a9.25 9.25 0 0 0 6.803 15.9c-.206-.912-.234-2.138.393-3.319c.652-1.229 2.002-1.762 2.995-2.006a9.2 9.2 0 0 1 1.898-.254h.043c1.673-.018 2.426-.562 2.826-1.08c.342-.444.47-.887.602-1.336l.05-.172A9.22 9.22 0 0 0 18.6 5.519l-.027.1c-.163.594-.425 1.202-.711 1.636c-.256.388-.752.78-1.164 1.076a10 10 0 0 1-.902.56c-.228.132-.433.25-.63.38c-.432.286-.766.593-.991 1.056a.67.67 0 0 0-.035.49c.075.272.126.578.126.889c.002.649-.328 1.176-.753 1.518a2.4 2.4 0 0 1-1.521.526c-2.455-.027-3.965-2.02-4.164-4.236c-.08-.881-.466-1.773-.954-2.552a8.8 8.8 0 0 0-1.296-1.62m1.167-.956a10.5 10.5 0 0 1 1.4 1.779c.558.89 1.069 2.012 1.177 3.214c.15 1.68 1.213 2.854 2.686 2.87a.9.9 0 0 0 .563-.194c.146-.117.196-.24.195-.346c0-.156-.026-.328-.072-.495a2.16 2.16 0 0 1 .131-1.542c.385-.794.956-1.285 1.514-1.653c.239-.158.487-.3.71-.43l.09-.05c.255-.148.48-.28.683-.427c.431-.31.704-.557.787-.684c.183-.276.388-.734.518-1.207c.103-.374.131-.662.122-.84A9.2 9.2 0 0 0 12 2.75a9.2 9.2 0 0 0-5.255 1.637M22.68 13.24q.07-.61.071-1.24c0-5.937-4.813-10.75-10.75-10.75S1.25 6.063 1.25 12S6.063 22.75 12 22.75c5.46 0 9.97-4.071 10.659-9.344a3 3 0 0 1 .048-.156zm-2.774 3.567c-.596.218-1.314.348-2.179.357h-.031l-.09.003a7.7 7.7 0 0 0-1.477.208c-.902.221-1.693.62-2.029 1.252c-.456.859-.39 1.793-.22 2.432a9.26 9.26 0 0 0 6.026-4.252"
        clip-rule="evenodd" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-left" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M10.53 5.47a.75.75 0 0 1 0 1.06l-4.72 4.72H20a.75.75 0 0 1 0 1.5H5.81l4.72 4.72a.75.75 0 1 1-1.06 1.06l-6-6a.75.75 0 0 1 0-1.06l6-6a.75.75 0 0 1 1.06 0"
        clip-rule="evenodd" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M13.47 5.47a.75.75 0 0 1 1.06 0l6 6a.75.75 0 0 1 0 1.06l-6 6a.75.75 0 1 1-1.06-1.06l4.72-4.72H4a.75.75 0 0 1 0-1.5h14.19l-4.72-4.72a.75.75 0 0 1 0-1.06"
        clip-rule="evenodd" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="star" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M9.153 5.408C10.42 3.136 11.053 2 12 2s1.58 1.136 2.847 3.408l.328.588c.36.646.54.969.82 1.182s.63.292 1.33.45l.636.144c2.46.557 3.689.835 3.982 1.776c.292.94-.546 1.921-2.223 3.882l-.434.507c-.476.557-.715.836-.822 1.18c-.107.345-.071.717.001 1.46l.066.677c.253 2.617.38 3.925-.386 4.506s-1.918.051-4.22-1.009l-.597-.274c-.654-.302-.981-.452-1.328-.452s-.674.15-1.328.452l-.596.274c-2.303 1.06-3.455 1.59-4.22 1.01c-.767-.582-.64-1.89-.387-4.507l.066-.676c.072-.744.108-1.116 0-1.46c-.106-.345-.345-.624-.821-1.18l-.434-.508c-1.677-1.96-2.515-2.941-2.223-3.882S3.58 8.328 6.04 7.772l.636-.144c.699-.158 1.048-.237 1.329-.45s.46-.536.82-1.182z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M20.16 5A6.29 6.29 0 0 0 12 4.36a6.27 6.27 0 0 0-8.16 9.48l6.21 6.22a2.78 2.78 0 0 0 3.9 0l6.21-6.22a6.27 6.27 0 0 0 0-8.84m-1.41 7.46l-6.21 6.21a.76.76 0 0 1-1.08 0l-6.21-6.24a4.29 4.29 0 0 1 0-6a4.27 4.27 0 0 1 6 0a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 0a4.29 4.29 0 0 1 .08 6Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M12 1.25a4.75 4.75 0 1 0 0 9.5a4.75 4.75 0 0 0 0-9.5M8.75 6a3.25 3.25 0 1 1 6.5 0a3.25 3.25 0 0 1-6.5 0M12 12.25c-2.04 0-3.922.47-5.322 1.27C5.3 14.308 4.25 15.51 4.25 17s1.05 2.692 2.428 3.48c1.4.8 3.283 1.27 5.322 1.27s3.922-.47 5.322-1.27c1.378-.788 2.428-1.99 2.428-3.48s-1.05-2.692-2.428-3.48c-1.4-.8-3.283-1.27-5.322-1.27M5.75 17c0-.72.517-1.517 1.672-2.177c1.134-.648 2.751-1.073 4.578-1.073s3.444.425 4.578 1.073c1.155.66 1.672 1.458 1.672 2.177s-.517 1.517-1.672 2.177c-1.134.648-2.751 1.073-4.578 1.073s-3.444-.425-4.578-1.073C6.267 18.517 5.75 17.72 5.75 17"
        clip-rule="evenodd" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="wishlist" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M5.624 4.424C3.965 5.182 2.75 6.986 2.75 9.137c0 2.197.9 3.891 2.188 5.343c1.063 1.196 2.349 2.188 3.603 3.154q.448.345.885.688c.526.415.995.778 1.448 1.043s.816.385 1.126.385s.674-.12 1.126-.385c.453-.265.922-.628 1.448-1.043q.437-.344.885-.687c1.254-.968 2.54-1.959 3.603-3.155c1.289-1.452 2.188-3.146 2.188-5.343c0-2.15-1.215-3.955-2.874-4.713c-1.612-.737-3.778-.542-5.836 1.597a.75.75 0 0 1-1.08 0C9.402 3.882 7.236 3.687 5.624 4.424M12 4.46C9.688 2.39 7.099 2.1 5 3.059C2.786 4.074 1.25 6.426 1.25 9.138c0 2.665 1.11 4.699 2.567 6.339c1.166 1.313 2.593 2.412 3.854 3.382q.43.33.826.642c.513.404 1.063.834 1.62 1.16s1.193.59 1.883.59s1.326-.265 1.883-.59c.558-.326 1.107-.756 1.62-1.16q.396-.312.826-.642c1.26-.97 2.688-2.07 3.854-3.382c1.457-1.64 2.567-3.674 2.567-6.339c0-2.712-1.535-5.064-3.75-6.077c-2.099-.96-4.688-.67-7 1.399"
        clip-rule="evenodd" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M2.249 2.292a.75.75 0 1 0-.498 1.416l.262.091c.667.235 1.106.39 1.429.549c.303.149.437.27.525.398c.09.132.16.314.2.677c.04.38.041.875.041 1.615V9.76c0 1.453.014 2.5.151 3.3c.146.854.438 1.466.985 2.042c.594.627 1.346.9 2.243 1.026c.858.122 1.948.122 3.293.122h5.406c.742 0 1.366 0 1.87-.062c.537-.065 1.025-.209 1.452-.556c.426-.348.665-.797.837-1.309c.163-.482.289-1.093.439-1.82l.508-2.469l.002-.005l.01-.052c.165-.825.303-1.519.338-2.077c.036-.586-.031-1.164-.413-1.66c-.235-.306-.565-.479-.866-.584a4.6 4.6 0 0 0-1.002-.21c-.687-.076-1.522-.076-2.34-.076H5.667l-.01-.108c-.054-.497-.17-.95-.453-1.362c-.284-.416-.662-.682-1.102-.899c-.412-.202-.936-.386-1.553-.603zm3.46 4.578h11.38c.856 0 1.61.001 2.205.067c.296.034.517.08.672.134a.6.6 0 0 1 .176.086c.062.082.128.23.102.651c-.027.444-.143 1.036-.321 1.926v.002l-.5 2.42c-.16.783-.27 1.303-.399 1.688c-.123.366-.239.523-.364.625s-.303.184-.685.23c-.404.05-.935.051-1.734.051h-5.303c-1.417 0-2.4-.002-3.14-.107c-.716-.101-1.093-.285-1.366-.573c-.32-.338-.493-.668-.595-1.263c-.11-.65-.129-1.558-.129-3.047zM7.5 21.75a2.25 2.25 0 1 1 0-4.5a2.25 2.25 0 0 1 0 4.5m-.75-2.25a.75.75 0 1 0 1.5 0a.75.75 0 0 0-1.5 0m9.75 2.25a2.25 2.25 0 1 1 0-4.5a2.25 2.25 0 0 1 0 4.5m-.75-2.25a.75.75 0 1 0 1.5 0a.75.75 0 0 0-1.5 0"
        clip-rule="evenodd" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd"
        d="M11.5 2.75a8.75 8.75 0 1 0 0 17.5a8.75 8.75 0 0 0 0-17.5M1.25 11.5c0-5.66 4.59-10.25 10.25-10.25S21.75 5.84 21.75 11.5c0 2.56-.939 4.902-2.491 6.698l3.271 3.272a.75.75 0 1 1-1.06 1.06l-3.272-3.271A10.2 10.2 0 0 1 11.5 21.75c-5.66 0-10.25-4.59-10.25-10.25"
        clip-rule="evenodd" />
    </symbol>

  </svg>
  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
    <div class="offcanvas-header">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-3">
          <span class="text-dark">Cart</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item border-0 d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Neauthy Cream</h6>
              <small class="text-body-secondary">Brief Description</small>
            </div>
            <span class="text-body-secondary">$99</span>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Everdrop Handwash</h6>
              <small class="text-body-secondary">Brief Description</small>
            </div>
            <span class="text-body-secondary">$120</span>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">CBD Muscle Gel</h6>
              <small class="text-body-secondary">Brief Description</small>
            </div>
            <span class="text-body-secondary">$85</span>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$304</strong>
          </li>
        </ul>
        <button class="w-100 btn btn-dark btn-lg" type="submit">Continue to Checkout</button>
      </div>
    </div>
  </div>
  <div class="search-box position-relative overflow-hidden w-100">
    <div class="search-wrap">
      <div class="close-button position-absolute">
        <svg class="close-btn" width="18" height="18">
          <use xlink:href="#close-btn"></use>
        </svg>
      </div>
      <form id="search-form" class="text-center pt-3" action="" method="">
        <input type="text" class="search-input fs-5 p-4 bg-body" placeholder="Search...">
        <svg class="search" width="22" height="22">
          <use xlink:href="#search"></use>
        </svg>
      </form>
    </div>
  </div>

  <!-- header section start  -->
  <header id="header" class="site-header py-4">
    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-expand-lg">
          <button class="navbar-toggler d-flex d-lg-none order-3 p-2 border-0 shadow-none" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false"
            aria-label="Toggle navigation">
            <svg class="navbar-icon" width="40" height="40">
              <use xlink:href="#navbar-icon"></use>
            </svg>
          </button>
          <a href="index.html" class="navbar-brand order-2 order-lg-2 d-flex ps-2 p-lg-0 d-lg-none">
            <img src="images/logo.png" alt="Logo">
          </a>
          <div class="offcanvas offcanvas-end order-3" tabindex="-1" id="bdNavbar"
            aria-labelledby="bdNavbarOffcanvasLabel">
            <div class="offcanvas-body align-items-center">
              <div class="offcanvas-header p-0 py-4 ms-2">
                <button type="button" class="btn-close btn-close-black shadow-none" data-bs-dismiss="offcanvas"
                  aria-label="Close" data-bs-target="#bdNavbar"></button>
              </div>
              <div class="col-md-2 d-flex">
                <a href="index.html" class="navbar-brand order-2 order-lg-2 d-none d-lg-flex">
                  <img src="images/logo.png" alt="Logo">
                </a>
              </div>
              <div class="col-md-5 offset-lg-2">
                <div class="navbar-collapse order-1 order-lg-1 ms-3 ms-lg-0" id="navbarMenu">
                  <ul class="navbar-nav d-flex justify-content-center">
                    <li class="nav-item">
                      <a class="pe-5" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                      <a class="pe-5" href="about.php">ABOUT</a>
                    </li>
                    <li class="nav-item">
                      <a class="pe-5" href="Shop.php">SHOP</a>
                    </li>

                   <li class="nav-item">
                      <a class="pe-5" href="blog.php">BLOG</a>
                    </li>
                    </li>
                  <li class="nav-item">
                      <a class="pe-5" href="login.php">LOGIN</a>
                    </li>
                    </li>

                  
                    <!-- Dropdown for Pages -->
                    <li class="nav-item dropdown">
                      <a class="pe-5 dropdown-toggle" href="#" id="navbarDropdownPages" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        PAGES
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownPages">
                        <li>
                          <a href="about.php" class="dropdown-item">About <span class="badge bg-primary">PRO</span></a>
                        </li>
                        <li>
                          <a href="card.php" class="dropdown-item">Cart <span class="badge bg-primary">PRO</span></a>
                        </li>
                        <li>
                          <a href="wishlist.php" class="dropdown-item">Wishlist <span
                              class="badge bg-primary">PRO</span></a>
                        </li>
                        <li>
                          <a href="checkout.php" class="dropdown-item">Checkout <span
                              class="badge bg-primary">PRO</span></a>
                        </li>
                        <li>
                          <a href="contact.php" class="dropdown-item">Contact <span
                              class="badge bg-primary">PRO</span></a>
                        </li>
                        <li>
                          <a href="faqs.php" class="dropdown-item">FAQs <span class="badge bg-primary">PRO</span></a>
                        </li>
                        <li>
                          <a href="account.php" class="dropdown-item">Account <span
                              class="badge bg-primary">PRO</span></a>
                        </li>

                      </ul>
                    </li>

                    
                    

                </div>
              </div>
              <div class="col-md-3">
                <ul
                  class="user-items list-unstyled d-none d-lg-flex justify-content-end align-items-center order-3 flex-grow-1 gap-4 m-0">
                  <li class="search-item" data-bs-toggle="collapse" data-bs-target="#search-box"
                    aria-controls="search-box" aria-expanded="false" aria-label="Toggle navigation">
                    <a href="#">
                      <svg class="search" width="24" height="24">
                        <use xlink:href="#search"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="cart.html" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                      aria-controls="offcanvasCart">
                      <svg class="cart" width="24" height="24">
                        <use xlink:href="#cart"></use>
                      </svg>
                    </a>
                  <li>
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                      aria-controls="offcanvasCart">
                      <svg class="cart" width="24" height="24">
                        <use xlink:href="#wishlist"></use>
                      </svg>
                    </a>
                  </li>
                  </li>
                  <li>
                    <a href="account.html">
                      <svg class="user" width="24" height="24">
                        <use xlink:href="#user"></use>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
