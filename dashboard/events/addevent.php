<?php
    session_start();
    //include 'events.xml';
    if(isset($_POST['submit'])){
    $date = $_POST['date'];
    $time = $_POST['time'];
    $name = $_POST['name'];
    $id = rand("1","100");






echo "The insert function is called."+$date+" "+$time+" "+$name;

    $xmldoc = new DomDocument( '1.0' );
    $xmldoc->preserveWhiteSpace = false;
    $xmldoc->formatOutput = true;

if( $xml = file_get_contents( 'events.xml') ) {
    $xmldoc->loadXML( $xml, LIBXML_NOBLANKS );

    // find the monthly tag
    $root = $xmldoc->getElementsByTagName('monthly')->item(0);

    // create the <event> tag
    $event = $xmldoc->createElement('event');

    // add the event tag before the first element in the <headercontent> tag
    $root->insertBefore( $event, $root->firstChild );

    // create other elements and add it to the <product> tag.
    $idElement = $xmldoc->createElement('id');
    $event->appendChild($idElement);
    $idText = $xmldoc->createTextNode($id);
    $idElement->appendChild($idText);

    $nameElement = $xmldoc->createElement('name');
    $event->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($name);
    $nameElement->appendChild($nameText);

    $startdateElement = $xmldoc->createElement('startdate');
    $event->appendChild($startdateElement);
    $startdateText = $xmldoc->createTextNode($date);
    $startdateElement->appendChild($startdateText);

    $timeElement = $xmldoc->createElement('starttime');
    $event->appendChild($timeElement);
    $timeText = $xmldoc->createTextNode($time);
    $timeElement->appendChild($timeText);

    $enddateElement = $xmldoc->createElement('enddate');
    $event->appendChild($enddateElement);
    $enddateText = $xmldoc->createTextNode($date);
    $enddateElement->appendChild($enddateText);

    $xmldoc->save('events.xml');
}

    header("Location: http://ptaa.gq/dashboard/calendar.php");
    }


?>
