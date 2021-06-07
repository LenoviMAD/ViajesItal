<?php
error_reporting(0);
include_once("xpresentationlayer.php");

xpresentationLayer::startHtml("esp");
xpresentationLayer::buildHead("Italviajes", "img-body");
xpresentationLayer::startMain();
xpresentationLayer::startForm("idForm", "POST");
xpresentationLayer::startDiv("container-checks");
xpresentationLayer::buildInputRadio("Titulo 0", "groupCheck", "Input1");
xpresentationLayer::buildInputRadio("Titulo 1", "groupCheck", "Input2");
xpresentationLayer::buildInputRadio("Titulo 2", "groupCheck", "Input3");
xpresentationLayer::endDiv();
xpresentationLayer::startContainerInputs();
xpresentationLayer::buildInputWithIcon("Input 1", "text", "input1", "input1", "sync_alt");
xpresentationLayer::buildInput("Input 2", "text", "input1", "input1");
xpresentationLayer::buildInputWithIcon("Fecha", "date", "date", "date", "calendar_today");
xpresentationLayer::buildInputWithIcon("Fecha2", "date", "date2", "date2", "calendar_today");
xpresentationLayer::buildInputWithIcon("Input 3", "date", "cabina", "cabina", "arrow_drop_down");
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
include './modals/modalCabina.php.php';
xpresentationLayer::endMain();
xpresentationLayer::endBody();

xpresentationLayer::endHtml();
