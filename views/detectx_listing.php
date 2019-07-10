<?php 

$this->view('listings/default',
[
  "i18n_title" => 'detectx.title',
  "table" => [
    [
      "column" => "machine.computer_name",
      "i18n_header" => "listing.computername",
      "formatter" => "clientDetail",
      "tab_link" => "detectx-tab",
    ],
    [
      "column" => "reportdata.serial_number",
      "i18n_header" => "serial",
    ],
    [
      "column" => "detectx.searchdate",
      "i18n_header" => "detectx.listing.searchdate",
      "formatter" => "timestampToMoment",
    ],
    [
      "column" => "detectx.status",
      "i18n_header" => "detectx.listing.status",
    ],
    [
      "column" => "detectx.numberofissues",
      "i18n_header" => "detectx.listing.numberofissues",
    ],
    [
      "column" => "reportdata.long_username",
      "i18n_header" => "username",
    ],
  ]
]);
