<?php
error_reporting(0);
include_once("xpresentationlayer.php");

xpresentationLayer::startHtml("esp");
xpresentationLayer::buildHead("Italviajes", "img-body");
xpresentationLayer::buildMenu();
xpresentationLayer::startMain();
xpresentationLayer::startForm("idForm", "POST");
xpresentationLayer::startDiv("container-checks");
xpresentationLayer::buildInputRadio("Titulo 0", "groupCheck", "Input1");
xpresentationLayer::buildInputRadio("Titulo 1", "groupCheck", "Input2");
xpresentationLayer::buildInputRadio("Titulo 2", "groupCheck", "Input3");
xpresentationLayer::endDiv();
xpresentationLayer::startContainerInputs();
xpresentationLayer::buildInputWithIcon("Input 1", "text", "input1", "input1", "sync_alt.png");
xpresentationLayer::buildInput("Input 2", "text", "input1", "input1");
xpresentationLayer::buildInputWithIcon("Fecha", "date", "date", "date", "calendar_today.png");
xpresentationLayer::buildInputWithIcon("Fecha2", "date", "date2", "date2", "calendar_today.png");
xpresentationLayer::buildInputWithIcon("Input 3", "date", "cabina", "cabina", "arrow_drop_down.png");
xpresentationLayer::endContainerInputs();
xpresentationLayer::startDiv("mt20");
//Div Para poner los checks
xpresentationLayer::startDiv("displayf");
xpresentationLayer::buildCheckBox("check", "checkIput", "checkIn");
xpresentationLayer::buildCheckBox("check", "checkIput2", "checkIn2");
xpresentationLayer::endDiv();
//Div Para poner los checks
xpresentationLayer::startDiv("displayf");
xpresentationLayer::buildCheckBox("check", "checkIput3", "checkIn3");
xpresentationLayer::buildCheckBox("check", "checkIput4", "checkIn4");
xpresentationLayer::endDiv();
xpresentationLayer::endDiv();
xpresentationLayer::endForm();
xpresentationLayer::buildGrid();

//DIV para las cards notices
xpresentationLayer::startDiv("container mt20 grid-3");
xpresentationLayer::buildCardsNotice("Notice1", "Aqui va el texto de la noticia", "./img/arrowsInputs.png");
xpresentationLayer::buildCardsNotice("Notice2", "Aqui va el texto de la noticia", "./img/LogoItalpromotion.jpg");
xpresentationLayer::buildCardsNotice("Notice3", "Aqui va el texto de la noticia", "./img/arrowsInputs.png");
xpresentationLayer::buildCardsNotice("Notice4", "Aqui va el texto de la noticia", "./img/arrowsInputs.png");
xpresentationLayer::buildCardsNotice("Notice5", "Aqui va el texto de la noticia", "./img/arrowsInputs.png");
xpresentationLayer::buildCardsNotice("Notice6", "Aqui va el texto de la noticia", "./img/arrowsInputs.png");
xpresentationLayer::endDiv();

include './modals/modalCabina.php';
include './modals/modalLoader.php';
xpresentationLayer::buildFooter();
xpresentationLayer::endMain();
xpresentationLayer::endBody();

xpresentationLayer::endHtml();
