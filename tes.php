<?php
 // INCLUDE THE phpToPDF.php FILE
require("phpToPDF.php"); 

// PUT YOUR HTML IN A VARIABLE
$my_html="<HTML>
  <head>
    <meta charset=\"utf-8\">
    <title>Invoice</title>
    <link rel=\"license\" href=\"http://www.opensource.org/licenses/mit-license/\">
    <style type=\"text/css\">
      /* reset */
      *{
        border: 0;
        box-sizing: content-box;
        color: inherit;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        font-weight: inherit;
        line-height: inherit;
        list-style: none;
        margin: 0;
        padding: 0;
        text-decoration: none;
        vertical-align: top;
      }
      /*span] { display: inline-block; }*/

      /* heading */
      h1 { font: bold 100% Ubuntu, Arial, sans-serif; text-align: center; text-transform: uppercase; }

      /* table */

      table { font-size: 75%; table-layout: fixed; width: 100%; }
      table { border-collapse: separate; border-spacing: 2px; }
      th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
      th, td { border-radius: 0.25em; border-style: solid; }
      th { background: #EEE; border-color: #BBB; }
      td { border-color: #DDD; }

      /* page */

      html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; }
      html { background: #fff; cursor: default; }

      body { box-sizing: border-box; margin:0;}
      #wrapper{height: 20cm; margin: 0 auto; width: 21cm; }
      body { background: #FFF;}

      header { margin: 0 0 3em; }

      header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
      header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
      header address p { margin: 0 0 0.25em; }
      header span, header img { display: block; float: right; }
      header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
      header img { max-height: 100%; max-width: 50%; }

      /* article */

      article, article address, table.meta, table.inventory { margin: 0 0 3em; }
      
      article h1 { clip: rect(0 0 0 0); position: absolute; }

      article address { float: left; font-size: 125%; font-weight: bold; }

      /* table meta & balance */

      table.meta, table.balance { float: right; width: 36%; }
     
     /* table meta */

      table.meta th { width: 40%; }
      table.meta td { width: 60%; }

      /* table items */

      table.inventory { clear: both; width: 100%; }
      table.inventory th { font-weight: bold; text-align: center; }

      table.inventory td:nth-child(1) { width: 26%; }
      table.inventory td:nth-child(2) { width: 38%; }
      table.inventory td:nth-child(3) { text-align: right; width: 12%; }
      table.inventory td:nth-child(4) { text-align: right; width: 12%; }
      table.inventory td:nth-child(5) { text-align: right; width: 12%; }

      /* table balance */

      table.balance th, table.balance td { width: 50%; }
      table.balance td { text-align: right; }
      #wrapper{
        margin-top: 40px !important;
      }
      /* aside */

      /* javascript */

      

      @media print {
        * { -webkit-print-color-adjust: exact; }
        html { background: none; padding: 0; }
        body { box-shadow: none; margin: 0; }
        span:empty { display: none; }
        .add, .cut { display: none; }
      }

      @page { margin: 0; }
    </style>
    

    </head>
  <body>
    <div id=\"wrapper\">
      <header>
        <h1>Invoice</h1>
        <address>
          <p>Bronte Online Portal</p>
          <p>Thapathali, Kathmandu<br>Nepal</p>
          <p>01-4451456</p>
        </address>
        <span><img src=\"img/footerlogo.jpg\"></span>
      </header>
      <article>
        <h1>Recipient</h1>
        <address>
          <p>Ram Shrestha<br>Thapathali</p>
        </address>
        <table class=\"meta\">
          <tr>
            <th><span>Invoice #</span></th>
            <td><span>101138</span></td>
          </tr>

          <tr>
            <th><span>Date</span></th>
            <td><span>January 1, 2012</span></td>
          </tr>
          <tr>
            <th><span>Amount Due</span></th>
            <td><span id=\"prefix\">$</span><span>600.00</span></td>
          </tr>
        </table>
        <table class=\"inventory\">
          <thead>
            <tr>
              <th><span>Item</span></th>
              <th><span>Description</span></th>
              <th><span>Rate</span></th>
              <th><span>Quantity</span></th>
              <th><span>Price</span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a class=\"cut\">-</a><span>Front End Consultation</span></td>
              <td><span>Experience Review</span></td>
              <td><span data-prefix>$</span><span>150.00</span></td>
              <td><span>4</span></td>
              <td><span data-prefix>$</span><span>600.00</span></td>
            </tr>
          </tbody>
        </table>
        <table class=\"balance\">
          <tr>
            <th><span>Total</span></th>
            <td><span data-prefix>$</span><span>600.00</span></td>
          </tr>
          <tr>
            <th><span>Amount Paid</span></th>
            <td><span data-prefix>$</span><span>0.00</span></td>
          </tr>
          <tr>
            <th><span>Balance Due</span></th>
            <td><span data-prefix>$</span><span>600.00</span></td>
          </tr>
        </table>
      </article>
    </div>
  </body>

</HTML>";

// SET YOUR PDF OPTIONS -- FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'download',
  "file_name" => 'receipt.pdf',
  "page_size" => 'A4');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);

?>