<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" media="all"/><link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&amp;display=swap" rel="stylesheet"><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700;800;900&amp;display=swap"/>
<style>
  html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%
  }

  body {
    margin: 0
  }

  article,
  aside,
  details,
  figcaption,
  figure,
  footer,
  header,
  hgroup,
  main,
  menu,
  nav,
  section,
  summary {
    display: block
  }

  audio,
  canvas,
  progress,
  video {
    display: inline-block;
    vertical-align: baseline
  }

  audio:not([controls]) {
    display: none;
    height: 0
  }

  [hidden],
  template {
    display: none
  }

  a {
    background-color: transparent
  }

  a:active,
  a:hover {
    outline: 0
  }

  abbr[title] {
    border-bottom: 1px dotted
  }

  b,
  strong {
    font-weight: 700
  }

  dfn {
    font-style: italic
  }

  h1 {
    margin: .67em 0;
    font-size: 2em
  }

  mark {
    color: #000;
    background: #ff0;
  }

  small {
    font-size: 80%;
  }

  sub,
  sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline;
  }

  sup {
    top: -.5em
  }

  sub {
    bottom: -.25em
  }

  img {
    border: 0
  }

  svg:not(:root) {
    overflow: hidden
  }

  figure {
    margin: 1em 40px
  }

  hr {
    height: 0;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box
  }

  pre {
    overflow: auto
  }

  code,
  kbd,
  pre,
  samp {
    font-family: monospace, monospace;
    font-size: 1em
  }

  button,
  input,
  optgroup,
  select,
  textarea {
    margin: 0;
    font: inherit;
    color: inherit
  }

  button {
    overflow: visible
  }

  button,
  select {
    text-transform: none
  }

  button,
  html input[type=button],
  input[type=reset],
  input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer
  }

  button[disabled],
  html input[disabled] {
    cursor: default
  }

  button::-moz-focus-inner,
  input::-moz-focus-inner {
    padding: 0;
    border: 0
  }

  input {
    line-height: normal
  }

  input[type=checkbox],
  input[type=radio] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0
  }

  input[type=number]::-webkit-inner-spin-button,
  input[type=number]::-webkit-outer-spin-button {
    height: auto
  }

  input[type=search] {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-appearance: textfield
  }

  input[type=search]::-webkit-search-cancel-button,
  input[type=search]::-webkit-search-decoration {
    -webkit-appearance: none
  }

  fieldset {
    padding: .35em .625em .75em;
    margin: 0 2px;
    border: 1px solid silver
  }

  legend {
    padding: 0;
    border: 0
  }

  textarea {
    overflow: auto
  }

  optgroup {
    font-weight: 700
  }

  table {
    border-spacing: 0;
    border-collapse: collapse
  }

  td,
  th {
    padding: 0
  }

  /*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
  @media print {

    *,
    :after,
    :before {
      color: #000 !important;
      text-shadow: none !important;
      background: 0 0 !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important
    }

    a,
    a:visited {
      text-decoration: underline
    }

    a[href]:after {
      content: " (" attr(href) ")"
    }

    abbr[title]:after {
      content: " (" attr(title) ")"
    }

    a[href^="javascript:"]:after,
    a[href^="#"]:after {
      content: ""
    }

    blockquote,
    pre {
      border: 1px solid #999;
      page-break-inside: avoid
    }

    thead {
      display: table-header-group
    }

    img,
    tr {
      page-break-inside: avoid
    }

    img {
      max-width: 100% !important
    }

    h2,
    h3,
    p {
      orphans: 3;
      widows: 3
    }

    h2,
    h3 {
      page-break-after: avoid
    }

    .navbar {
      display: none
    }

    .btn>.caret,
    .dropup>.btn>.caret {
      border-top-color: #000 !important
    }

    .label {
      border: 1px solid #000
    }

    .table {
      border-collapse: collapse !important
    }

    .table td,
    .table th {
      background-color: #fff !important
    }

    .table-bordered td,
    .table-bordered th {
      border: 1px solid #ddd !important
    }
  }

  @font-face {
    font-family: 'Glyphicons Halflings';
    src: url(fonts/glyphicons-halflings-regular.php);
    src: url(fonts/glyphicons-halflings-regulard41d.php?#iefix) format('embedded-opentype'), url(fonts/glyphicons-halflings-regular-2.php) format('woff2'), url(fonts/glyphicons-halflings-regular-3.php) format('woff'), url(fonts/glyphicons-halflings-regular-4.php) format('truetype'), url(fonts/glyphicons-halflings-regular-5.php#glyphicons_halflingsregular) format('svg')
  }

  .glyphicon {
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
  }

  .glyphicon-asterisk:before {
    content: "\002a"
  }

  .glyphicon-plus:before {
    content: "\002b"
  }

  .glyphicon-eur:before,
  .glyphicon-euro:before {
    content: "\20ac"
  }

  .glyphicon-minus:before {
    content: "\2212"
  }

  .glyphicon-cloud:before {
    content: "\2601"
  }

  .glyphicon-envelope:before {
    content: "\2709"
  }

  .glyphicon-pencil:before {
    content: "\270f"
  }

  .glyphicon-glass:before {
    content: "\e001"
  }

  .glyphicon-music:before {
    content: "\e002"
  }

  .glyphicon-search:before {
    content: "\e003"
  }

  .glyphicon-heart:before {
    content: "\e005"
  }

  .glyphicon-star:before {
    content: "\e006"
  }

  .glyphicon-star-empty:before {
    content: "\e007"
  }

  .glyphicon-user:before {
    content: "\e008"
  }

  .glyphicon-film:before {
    content: "\e009"
  }

  .glyphicon-th-large:before {
    content: "\e010"
  }

  .glyphicon-th:before {
    content: "\e011"
  }

  .glyphicon-th-list:before {
    content: "\e012"
  }

  .glyphicon-ok:before {
    content: "\e013"
  }

  .glyphicon-remove:before {
    content: "\e014"
  }

  .glyphicon-zoom-in:before {
    content: "\e015"
  }

  .glyphicon-zoom-out:before {
    content: "\e016"
  }

  .glyphicon-off:before {
    content: "\e017"
  }

  .glyphicon-signal:before {
    content: "\e018"
  }

  .glyphicon-cog:before {
    content: "\e019"
  }

  .glyphicon-trash:before {
    content: "\e020"
  }

  .glyphicon-home:before {
    content: "\e021"
  }

  .glyphicon-file:before {
    content: "\e022"
  }

  .glyphicon-time:before {
    content: "\e023"
  }

  .glyphicon-road:before {
    content: "\e024"
  }

  .glyphicon-download-alt:before {
    content: "\e025"
  }

  .glyphicon-download:before {
    content: "\e026"
  }

  .glyphicon-upload:before {
    content: "\e027"
  }

  .glyphicon-inbox:before {
    content: "\e028"
  }

  .glyphicon-play-circle:before {
    content: "\e029"
  }

  .glyphicon-repeat:before {
    content: "\e030"
  }

  .glyphicon-refresh:before {
    content: "\e031"
  }

  .glyphicon-list-alt:before {
    content: "\e032"
  }

  .glyphicon-lock:before {
    content: "\e033"
  }

  .glyphicon-flag:before {
    content: "\e034"
  }

  .glyphicon-headphones:before {
    content: "\e035"
  }

  .glyphicon-volume-off:before {
    content: "\e036"
  }

  .glyphicon-volume-down:before {
    content: "\e037"
  }

  .glyphicon-volume-up:before {
    content: "\e038"
  }

  .glyphicon-qrcode:before {
    content: "\e039"
  }

  .glyphicon-barcode:before {
    content: "\e040"
  }

  .glyphicon-tag:before {
    content: "\e041"
  }

  .glyphicon-tags:before {
    content: "\e042"
  }

  .glyphicon-book:before {
    content: "\e043"
  }

  .glyphicon-bookmark:before {
    content: "\e044"
  }

  .glyphicon-print:before {
    content: "\e045"
  }

  .glyphicon-camera:before {
    content: "\e046"
  }

  .glyphicon-font:before {
    content: "\e047"
  }

  .glyphicon-bold:before {
    content: "\e048"
  }

  .glyphicon-italic:before {
    content: "\e049"
  }

  .glyphicon-text-height:before {
    content: "\e050"
  }

  .glyphicon-text-width:before {
    content: "\e051"
  }

  .glyphicon-align-left:before {
    content: "\e052"
  }

  .glyphicon-align-center:before {
    content: "\e053"
  }

  .glyphicon-align-right:before {
    content: "\e054"
  }

  .glyphicon-align-justify:before {
    content: "\e055"
  }

  .glyphicon-list:before {
    content: "\e056"
  }

  .glyphicon-indent-left:before {
    content: "\e057"
  }

  .glyphicon-indent-right:before {
    content: "\e058"
  }

  .glyphicon-facetime-video:before {
    content: "\e059"
  }

  .glyphicon-picture:before {
    content: "\e060"
  }

  .glyphicon-map-marker:before {
    content: "\e062"
  }

  .glyphicon-adjust:before {
    content: "\e063"
  }

  .glyphicon-tint:before {
    content: "\e064"
  }

  .glyphicon-edit:before {
    content: "\e065"
  }

  .glyphicon-share:before {
    content: "\e066"
  }

  .glyphicon-check:before {
    content: "\e067"
  }

  .glyphicon-move:before {
    content: "\e068"
  }

  .glyphicon-step-backward:before {
    content: "\e069"
  }

  .glyphicon-fast-backward:before {
    content: "\e070"
  }

  .glyphicon-backward:before {
    content: "\e071"
  }

  .glyphicon-play:before {
    content: "\e072"
  }

  .glyphicon-pause:before {
    content: "\e073"
  }

  .glyphicon-stop:before {
    content: "\e074"
  }

  .glyphicon-forward:before {
    content: "\e075"
  }

  .glyphicon-fast-forward:before {
    content: "\e076"
  }

  .glyphicon-step-forward:before {
    content: "\e077"
  }

  .glyphicon-eject:before {
    content: "\e078"
  }

  .glyphicon-chevron-left:before {
    content: "\e079"
  }

  .glyphicon-chevron-right:before {
    content: "\e080"
  }

  .glyphicon-plus-sign:before {
    content: "\e081"
  }

  .glyphicon-minus-sign:before {
    content: "\e082"
  }

  .glyphicon-remove-sign:before {
    content: "\e083"
  }

  .glyphicon-ok-sign:before {
    content: "\e084"
  }

  .glyphicon-question-sign:before {
    content: "\e085"
  }

  .glyphicon-info-sign:before {
    content: "\e086"
  }

  .glyphicon-screenshot:before {
    content: "\e087"
  }

  .glyphicon-remove-circle:before {
    content: "\e088"
  }

  .glyphicon-ok-circle:before {
    content: "\e089"
  }

  .glyphicon-ban-circle:before {
    content: "\e090"
  }

  .glyphicon-arrow-left:before {
    content: "\e091"
  }

  .glyphicon-arrow-right:before {
    content: "\e092"
  }

  .glyphicon-arrow-up:before {
    content: "\e093"
  }

  .glyphicon-arrow-down:before {
    content: "\e094"
  }

  .glyphicon-share-alt:before {
    content: "\e095"
  }

  .glyphicon-resize-full:before {
    content: "\e096"
  }

  .glyphicon-resize-small:before {
    content: "\e097"
  }

  .glyphicon-exclamation-sign:before {
    content: "\e101"
  }

  .glyphicon-gift:before {
    content: "\e102"
  }

  .glyphicon-leaf:before {
    content: "\e103"
  }

  .glyphicon-fire:before {
    content: "\e104"
  }

  .glyphicon-eye-open:before {
    content: "\e105"
  }

  .glyphicon-eye-close:before {
    content: "\e106"
  }

  .glyphicon-warning-sign:before {
    content: "\e107"
  }

  .glyphicon-plane:before {
    content: "\e108"
  }

  .glyphicon-calendar:before {
    content: "\e109"
  }

  .glyphicon-random:before {
    content: "\e110"
  }

  .glyphicon-comment:before {
    content: "\e111"
  }

  .glyphicon-magnet:before {
    content: "\e112"
  }

  .glyphicon-chevron-up:before {
    content: "\e113"
  }

  .glyphicon-chevron-down:before {
    content: "\e114"
  }

  .glyphicon-retweet:before {
    content: "\e115"
  }

  .glyphicon-shopping-cart:before {
    content: "\e116"
  }

  .glyphicon-folder-close:before {
    content: "\e117"
  }

  .glyphicon-folder-open:before {
    content: "\e118"
  }

  .glyphicon-resize-vertical:before {
    content: "\e119"
  }

  .glyphicon-resize-horizontal:before {
    content: "\e120"
  }

  .glyphicon-hdd:before {
    content: "\e121"
  }

  .glyphicon-bullhorn:before {
    content: "\e122"
  }

  .glyphicon-bell:before {
    content: "\e123"
  }

  .glyphicon-certificate:before {
    content: "\e124"
  }

  .glyphicon-thumbs-up:before {
    content: "\e125"
  }

  .glyphicon-thumbs-down:before {
    content: "\e126"
  }

  .glyphicon-hand-right:before {
    content: "\e127"
  }

  .glyphicon-hand-left:before {
    content: "\e128"
  }

  .glyphicon-hand-up:before {
    content: "\e129"
  }

  .glyphicon-hand-down:before {
    content: "\e130"
  }

  .glyphicon-circle-arrow-right:before {
    content: "\e131"
  }

  .glyphicon-circle-arrow-left:before {
    content: "\e132"
  }

  .glyphicon-circle-arrow-up:before {
    content: "\e133"
  }

  .glyphicon-circle-arrow-down:before {
    content: "\e134"
  }

  .glyphicon-globe:before {
    content: "\e135"
  }

  .glyphicon-wrench:before {
    content: "\e136"
  }

  .glyphicon-tasks:before {
    content: "\e137"
  }

  .glyphicon-filter:before {
    content: "\e138"
  }

  .glyphicon-briefcase:before {
    content: "\e139"
  }

  .glyphicon-fullscreen:before {
    content: "\e140"
  }

  .glyphicon-dashboard:before {
    content: "\e141"
  }

  .glyphicon-paperclip:before {
    content: "\e142"
  }

  .glyphicon-heart-empty:before {
    content: "\e143"
  }

  .glyphicon-link:before {
    content: "\e144"
  }

  .glyphicon-phone:before {
    content: "\e145"
  }

  .glyphicon-pushpin:before {
    content: "\e146"
  }

  .glyphicon-usd:before {
    content: "\e148"
  }

  .glyphicon-gbp:before {
    content: "\e149"
  }

  .glyphicon-sort:before {
    content: "\e150"
  }

  .glyphicon-sort-by-alphabet:before {
    content: "\e151"
  }

  .glyphicon-sort-by-alphabet-alt:before {
    content: "\e152"
  }

  .glyphicon-sort-by-order:before {
    content: "\e153"
  }

  .glyphicon-sort-by-order-alt:before {
    content: "\e154"
  }

  .glyphicon-sort-by-attributes:before {
    content: "\e155"
  }

  .glyphicon-sort-by-attributes-alt:before {
    content: "\e156"
  }

  .glyphicon-unchecked:before {
    content: "\e157"
  }

  .glyphicon-expand:before {
    content: "\e158"
  }

  .glyphicon-collapse-down:before {
    content: "\e159"
  }

  .glyphicon-collapse-up:before {
    content: "\e160"
  }

  .glyphicon-log-in:before {
    content: "\e161"
  }

  .glyphicon-flash:before {
    content: "\e162"
  }

  .glyphicon-log-out:before {
    content: "\e163"
  }

  .glyphicon-new-window:before {
    content: "\e164"
  }

  .glyphicon-record:before {
    content: "\e165"
  }

  .glyphicon-save:before {
    content: "\e166"
  }

  .glyphicon-open:before {
    content: "\e167"
  }

  .glyphicon-saved:before {
    content: "\e168"
  }

  .glyphicon-import:before {
    content: "\e169"
  }

  .glyphicon-export:before {
    content: "\e170"
  }

  .glyphicon-send:before {
    content: "\e171"
  }

  .glyphicon-floppy-disk:before {
    content: "\e172"
  }

  .glyphicon-floppy-saved:before {
    content: "\e173"
  }

  .glyphicon-floppy-remove:before {
    content: "\e174"
  }

  .glyphicon-floppy-save:before {
    content: "\e175"
  }

  .glyphicon-floppy-open:before {
    content: "\e176"
  }

  .glyphicon-credit-card:before {
    content: "\e177"
  }

  .glyphicon-transfer:before {
    content: "\e178"
  }

  .glyphicon-cutlery:before {
    content: "\e179"
  }

  .glyphicon-header:before {
    content: "\e180"
  }

  .glyphicon-compressed:before {
    content: "\e181"
  }

  .glyphicon-earphone:before {
    content: "\e182"
  }

  .glyphicon-phone-alt:before {
    content: "\e183"
  }

  .glyphicon-tower:before {
    content: "\e184"
  }

  .glyphicon-stats:before {
    content: "\e185"
  }

  .glyphicon-sd-video:before {
    content: "\e186"
  }

  .glyphicon-hd-video:before {
    content: "\e187"
  }

  .glyphicon-subtitles:before {
    content: "\e188"
  }

  .glyphicon-sound-stereo:before {
    content: "\e189"
  }

  .glyphicon-sound-dolby:before {
    content: "\e190"
  }

  .glyphicon-sound-5-1:before {
    content: "\e191"
  }

  .glyphicon-sound-6-1:before {
    content: "\e192"
  }

  .glyphicon-sound-7-1:before {
    content: "\e193"
  }

  .glyphicon-copyright-mark:before {
    content: "\e194"
  }

  .glyphicon-registration-mark:before {
    content: "\e195";
  }

  .glyphicon-cloud-download:before {
    content: "\e197";
  }

  .glyphicon-cloud-upload:before {
    content: "\e198";
  }

  .glyphicon-tree-conifer:before {
    content: "\e199";
  }

  .glyphicon-tree-deciduous:before {
    content: "\e200";
  }

  .g���?V ���?V `�?V p�?V X��?V ��?V @ ��?V re {
    content:"\e????U  ????U                  P~??U          ?" ??U ???U ????U @ ????U before {
      content: "\e206";
    }
  }

    .glyphicon-alert:before {
      content: "\e209";
    }

    .glyphicon-equalizer:before {
      content: "\e210";
    }

    .glyphicon-king:before {
      content: "\e211";
    }

    .glyphicon-queen:before {
      content: "\e212";
    }

    .glyphicon-pawn:before {
      content: "\e213";
    }

    .glyphicon-bishop:before {
      content: "\e214"
    }

    .glyphicon-knight:before {
      content: "\e215"
    }

    .glyphicon-baby-formula:before {
      content: "\e216"
    }

    .glyphicon-tent:before {
      content: "\26fa"
    }

    .glyphicon-blackboard:before {
      content: "\e218"
    }

    .glyphicon-bed:before {
      content: "\e219"
    }

    .glyphicon-apple:before {
      content: "\f8ff"
    }

    .glyphicon-erase:before {
      content: "\e221"
    }

    .glyphicon-hourglass:before {
      content: "\231b"
    }

    .glyphicon-lamp:before {
      content: "\e223"
    }

    .glyphicon-duplicate:before {
      content: "\e224"
    }

    .glyphicon-piggy-bank:before {
      content: "\e225"
    }

    .glyphicon-scissors:before {
      content: "\e226"
    }

    .glyphicon-bitcoin:before {
      content: "\e227"
    }

    .glyphicon-btc:before?2???U ?2???U @/b??U ?b??U X3???U 3???U @ 3???U jpy:before {
      content: "\00a5"
    }

    .glyphicon-ruble:before {
      content:"\20?u??^U  ?u??^U                  {??^U          ?,??^U  ?u??^U          ?u??^U   @      ?u??^U          ??^U   @      @��^U                  `۰??U   @      `۰??U          @      @???U          4úøU  04úøU                  0颺øU          `úøU  4úøU          P4úøU   @      P4úøU          "
    }

    .glyphicon-modal-window:before {
      content: "\e237"
    }

    .glyphicon-oil:before {
      content: "\e238"
    }

    .glyphicon-grain:before {
      content: "\e239"
    }

    .glyphicon-sunglasses:before {
      content: "\e240"
    }

    .glyphicon-text-size:before {
      content: "\e241"
    }

    .glyphicon-text-color:before {
      content: "\e242"
    }

    .glyphicon-text-background:before {
      content: "\e243"
    }

    .glyphicon-object-align-top:before {
      content: "\e244"
    }

    .glyphicon-object-align-bottom:before {
      content: "\e245"
    }

    .glyphicon-object-align-horizontal:before {
      content: "\e246"
    }

    .glyphicon-object-align-left:before {
      content: "\e247"
    }

    .glyphicon-object-align-vertical:before {
      content: "\e248"
    }

    .glyphicon-object-align-right:before {
      content: "\e249"
    }

    .glyphicon-triangle-right:before {
      content: "\e250"
    }

    .glyphicon-triangle-left:before {
      content: "\e251"
    }

    .glyphicon-triangle-bottom:before {
      content: "\e252"
    }

    .glyphicon-triangle-top:before {
      content: "\e253"
    }

    .glyphicon-console:before {
      content: "\e254"
    }

    .glyphicon-superscript:before {
      content: "\e255"
    }

    .glyphicon-subscript:before {
      content: "\e256"
    }

    .glyphicon-menu-left:before {
      content: "\e257"
    }

    .glyphicon-menu-right:before {
      content: "\e258"
    }

    .glyphicon-menu-down:before {
      content: "\e259"
    }

    .glyphicon-menu-up:before {
      content: "\e260"
    }

    * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box
    }

    :after,
    :before {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box
    }

    html {
      font-size: 10px;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    body {
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 14px;
      line-height: 1.42857143;
      color: #333;
      background-color: #fff
    }

    button,
    input,
    select,
    textarea {
      font-family: inherit;
      font-size: inherit;
      line-height: inherit
    }

    a {
      color: #337ab7;
      text-decoration: none
    }

    a:focus,
    a:hover {
      color: #23527c;
      text-decoration: underline
    }

    a:focus {
      outline: 5px auto -webkit-focus-ring-color;
      outline-offset: -2px
    }

    figure {
      margin: 0
    }

    img {
      vertical-align: middle
    }

    .carousel-inner>.item>a>img,
    .carousel-inner>.item>img,
    .img-responsive,
    .thumbnail a>img,
    .thumbnail>img {
      display: block;
      max-width: 100%;
      height: auto
    }

    .img-rounded {
      border-radius: 6px
    }

    .img-thumbnail {
      display: inline-block;
      max-width: 100%;
      height: auto;
      padding: 4px;
      line-height: 1.42857143;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 4px;
      -webkit-transition: all .2s ease-in-out;
      -o-transition: all .2s ease-in-out;
      transition: all .2s ease-in-out
    }

    .img-circle {
      border-radius: 50%
    }

    hr {
      margin-top: 20px;
      margin-bottom: 20px;
      border: 0;
      border-top: 1px solid #eee
    }

    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      border: 0
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
      position: static;
      width: auto;
      height: auto;
      margin: 0;
      overflow: visible;
      clip: auto
    }

    [role=button] {
      cursor: pointer
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: inherit;
      font-weight: 500;
      line-height: 1.1;
      color: inherit
    }

    .h1 .small,
    .h1 small,
    .h2 .small,
    .h2 small,
    .h3 .small,
    .h3 small,
    .h4 .small,
    .h4 small,
    .h5 .small,
    .h5 small,
    .h6 .small,
    .h6 small,
    h1 .small,
    h1 small,
    h2 .small,
    h2 small,
    h3 .small,
    h3 small,
    h4 .small,
    h4 small,
    h5 .small,
    h5 small,
    h6 .small,
    h6 small {
      font-weight: 400;
      line-height: 1;
      color: #777
    }

    .h1,
    .h2,
    .h3,
    h1,
    h2,
    h3 {
      margin-top: 20px;
      margin-bottom: 10px
    }

    .h1 .small,
    .h1 small,
    .h2 .small,
    .h2 small,
    .h3 .small,
    .h3 small,
    h1 .small,
    h1 small,
    h2 .small,
    h2 small,
    h3 .small,
    h3 small {
      font-size: 65%
    }

    .h4,
    .h5,
    .h6,
    h4,
    h5,
    h6 {
      margin-top: 10px;
      margin-bottom: 10px
    }

    .h4 .small,
    .h4 small,
    .h5 .small,
    .h5 small,
    .h6 .small,
    .h6 small,
    h4 .small,
    h4 small,
    h5 .small,
    h5 small,
    h6 .small,
    h6 small {
      font-size: 75%
    }

    .h1,
    h1 {
      font-size: 36px
    }

    .h2,
    h2 {
      font-size: 30px
    }

    .h3,
    h3 {
      font-size: 24px
    }

    .h4,
    h4 {
      font-size: 18px
    }

    .h5,
    h5 {
      font-size: 14px
    }

    .h6,
    h6 {
      font-size: 12px
    }

    p {
      margin: 0 0 10px
    }

    .lead {
      margin-bottom: 20px;
      font-size: 16px;
      font-weight: 300;
      line-height: 1.4
    }

    @media (min-width:768px) {
      .lead {
        font-size: 21px
      }
    }

    .small,
    small {
      font-size: 85%
    }

    .mark,
    mark {
      padding: .2em;
      background-color: #fcf8e3
    }

    .text-left {
      text-align: left
    }

    .text-right {
      text-align: right
    }

    .text-center {
      text-align: center
    }

    .text-justify {
      text-align: justify
    }

    .text-nowrap {
      white-space: nowrap
    }

    .text-lowercase {
      text-transform: lowercase
    }

    .text-uppercase {
      text-transform: uppercase
    }

    .text-capitalize {
      text-transform: capitalize
    }

    .text-muted {
      color: #777
    }

    .text-primary {
      color: #337ab7
    }

    a.text-primary:focus,
    a.text-primary:hover {
      color: #286090
    }

    .text-success {
      color: #3c763d
    }

    a.text-success:focus,
    a.text-success:hover {
      color: #2b542c
    }

    .text-info {
      color: #31708f
    }

    a.text-info:focus,
    a.text-info:hover {
      color: #245269
    }

    .text-warning {
      color: #8a6d3b
    }

    a.text-warning:focus,
    a.text-warning:hover {
      color: #66512c
    }

    .text-danger {
      color: #a94442
    }

    a.text-danger:focus,
    a.text-danger:hover {
      color: #843534
    }

    .bg-primary {
      color: #fff;
      background-color: #337ab7
    }

    a.bg-primary:focus,
    a.bg-primary:hover {
      background-color: #286090
    }

    .bg-success {
      background-color: #dff0d8
    }

    a.bg-success:focus,
    a.bg-success:hover {
      background-color: #c1e2b3
    }

    .bg-info {
      background-color: #d9edf7
    }

    a.bg-info:focus,
    a.bg-info:hover {
      background-color: #afd9ee
    }

    .bg-warning {
      background-color: #fcf8e3
    }

    a.bg-warning:focus,
    a.bg-warning:hover {
      background-color: #f7ecb5
    }

    .bg-danger {
      background-color: #f2dede
    }

    a.bg-danger:focus,
    a.bg-danger:hover {
      background-color: #e4b9b9
    }

    .page-header {
      padding-bottom: 9px;
      margin: 40px 0 20px;
      border-bottom: 1px solid #eee
    }

    ol,
    ul {
      margin-top: 0;
      margin-bottom: 10px
    }

    ol ol,
    ol ul,
    ul ol,
    ul ul {
      margin-bottom: 0
    }

    .list-unstyled {
      padding-left: 0;
      list-style: none
    }

    .list-inline {
      padding-left: 0;
      margin-left: -5px;
      list-style: none
    }

    .list-inline>li {
      display: inline-block;
      padding-right: 5px;
      padding-left: 5px
    }

    dl {
      margin-top: 0;
      margin-bottom: 20px
    }

    dd,
    dt {
      line-height: 1.42857143
    }

    dt {
      font-weight: 700
    }

    dd {
      margin-left: 0
    }

    @media (min-width:768px) {
      .dl-horizontal dt {
        float: left;
        width: 160px;
        overflow: hidden;
        clear: left;
        text-align: right;
        text-overflow: ellipsis;
        white-space: nowrap
      }

      .dl-horizontal dd {
        margin-left: 180px
      }
    }

    abbr[data-original-title],
    abbr[title] {
      cursor: help;
      border-bottom: 1px dotted #777
    }

    .initialism {
      font-size: 90%;
      text-transform: uppercase
    }

    blockquote {
      padding: 10px 20px;
      margin: 0 0 20px;
      font-size: 17.5px;
      border-left: 5px solid #eee
    }

    blockquote ol:last-child,
    blockquote p:last-child,
    blockquote ul:last-child {
      margin-bottom: 0
    }

    blockquote .small,
    blockquote footer,
    blockquote small {
      display: block;
      font-size: 80%;
      line-height: 1.42857143;
      color: #777
    }

    blockquote .small:before,
    blockquote footer:before,
    blockquote small:before {
      content: '\2014 \00A0'
    }

    .blockquote-reverse,
    blockquote.pull-right {
      padding-right: 15px;
      padding-left: 0;
      text-align: right;
      border-right: 5px solid #eee;
      border-left: 0
    }

    .blockquote-reverse .small:before,
    .blockquote-reverse footer:before,
    .blockquote-reverse small:before,
    blockquote.pull-right .small:before,
    blockquote.pull-right footer:before,
    blockquote.pull-right small:before {
      content: ''
    }

    .blockquote-reverse .small:after,
    .blockquote-reverse footer:after,
    .blockquote-reverse small:after,
    blockquote.pull-right .small:after,
    blockquote.pull-right footer:after,
    blockquote.pull-right small:after {
      content: '\00A0 \2014'
    }

    address {
      margin-bottom: 20px;
      font-style: normal;
      line-height: 1.42857143
    }

    code,
    kbd,
    pre,
    samp {
      font-family: Menlo, Monaco, Consolas, "Courier New", monospace
    }

    code {
      padding: 2px 4px;
      font-size: 90%;
      color: #c7254e;
      background-color: #f9f2f4;
      border-radius: 4px
    }

    kbd {
      padding: 2px 4px;
      font-size: 90%;
      color: #fff;
      background-color: #333;
      border-radius: 3px;
      -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
      box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25)
    }

    kbd kbd {
      padding: 0;
      font-size: 100%;
      font-weight: 700;
      -webkit-box-shadow: none;
      box-shadow: none
    }

    pre {
      display: block;
      padding: 9.5px;
      margin: 0 0 10px;
      font-size: 13px;
      line-height: 1.42857143;
      color: #333;
      word-break: break-all;
      word-wrap: break-word;
      background-color: #f5f5f5;
      border: 1px solid #ccc;
      border-radius: 4px
    }

    pre code {
      padding: 0;
      font-size: inherit;
      color: inherit;
      white-space: pre-wrap;
      background-color: transparent;
      border-radius: 0
    }

    .pre-scrollable {
      max-height: 340px;
      overflow-y: scroll
    }

    .container {
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto
    }

    @media (min-width:768px) {
      .container {
        width: 750px
      }
    }

    @media (min-width:992px) {
      .container {
        width: 970px
      }
    }

    @media (min-width:1200px) {
      .container {
        width: 1170px
      }
    }

    .container-fluid {
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto
    }

    .row {
      margin-right: -15px;
      margin-left: -15px
    }

    .col-lg-1,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-xs-1,
    .col-xs-10,
    .col-xs-11,
    .col-xs-12,
    .col-xs-2,
    .col-xs-3,
    .col-xs-4,
    .col-xs-5,
    .col-xs-6,
    .col-xs-7,
    .col-xs-8,
    .col-xs-9 {
      position: relative;
      min-height: 1px;
      padding-right: 15px;
      padding-left: 15px
    }

    .col-xs-1,
    .col-xs-10,
    .col-xs-11,
    .col-xs-12,
    .col-xs-2,
    .col-xs-3,
    .col-xs-4,
    .col-xs-5,
    .col-xs-6,
    .col-xs-7,
    .col-xs-8,
    .col-xs-9 {
      float: left
    }

    .col-xs-12 {
      width: 100%
    }

    .col-xs-11 {
      width: 91.66666667%
    }

    .col-xs-10 {
      width: 83.33333333%
    }

    .col-xs-9 {
      width: 75%
    }

    .col-xs-8 {
      width: 66.66666667%
    }

    .col-xs-7 {
      width: 58.33333333%
    }

    .col-xs-6 {
      width: 50%
    }

    .col-xs-5 {
      width: 41.66666667%
    }

    .col-xs-4 {
      width: 33.33333333%
    }

    .col-xs-3 {
      width: 25%
    }

    .col-xs-2 {
      width: 16.66666667%
    }

    .col-xs-1 {
      width: 8.33333333%
    }

    .col-xs-pull-12 {
      right: 100%
    }

    .col-xs-pull-11 {
      right: 91.66666667%
    }

    .col-xs-pull-10 {
      right: 83.33333333%
    }

    .col-xs-pull-9 {
      right: 75%
    }

    .col-xs-pull-8 {
      right: 66.66666667%
    }

    .col-xs-pull-7 {
      right: 58.33333333%
    }

    .col-xs-pull-6 {
      right: 50%
    }

    .col-xs-pull-5 {
      right: 41.66666667%
    }

    .col-xs-pull-4 {
      right: 33.33333333%
    }

    .col-xs-pull-3 {
      right: 25%
    }

    .col-xs-pull-2 {
      right: 16.66666667%
    }

    .col-xs-pull-1 {
      right: 8.33333333%
    }

    .col-xs-pull-0 {
      right: auto
    }

    .col-xs-push-12 {
      left: 100%
    }

    .col-xs-push-11 {
      left: 91.66666667%
    }

    .col-xs-push-10 {
      left: 83.33333333%
    }

    .col-xs-push-9 {
      left: 75%
    }

    .col-xs-push-8 {
      left: 66.66666667%
    }

    .col-xs-push-7 {
      left: 58.33333333%
    }

    .col-xs-push-6 {
      left: 50%
    }

    .col-xs-push-5 {
      left: 41.66666667%
    }

    .col-xs-push-4 {
      left: 33.33333333%
    }

    .col-xs-push-3 {
      left: 25%
    }

    .col-xs-push-2 {
      left: 16.66666667%
    }

    .col-xs-push-1 {
      left: 8.33333333%
    }

    .col-xs-push-0 {
      left: auto
    }

    .col-xs-offset-12 {
      margin-left: 100%
    }

    .col-xs-offset-11 {
      margin-left: 91.66666667%
    }

    .col-xs-offset-10 {
      margin-left: 83.33333333%
    }

    .col-xs-offset-9 {
      margin-left: 75%
    }

    .col-xs-offset-8 {
      margin-left: 66.66666667%
    }

    .col-xs-offset-7 {
      margin-left: 58.33333333%
    }

    .col-xs-offset-6 {
      margin-left: 50%
    }

    .col-xs-offset-5 {
      margin-left: 41.66666667%
    }

    .col-xs-offset-4 {
      margin-left: 33.33333333%
    }

    .col-xs-offset-3 {
      margin-left: 25%
    }

    .col-xs-offset-2 {
      margin-left: 16.66666667%
    }

    .col-xs-offset-1 {
      margin-left: 8.33333333%
    }

    .col-xs-offset-0 {
      margin-left: 0
    }

    @media (min-width:768px) {

      .col-sm-1,
      .col-sm-10,
      .col-sm-11,
      .col-sm-12,
      .col-sm-2,
      .col-sm-3,
      .col-sm-4,
      .col-sm-5,
      .col-sm-6,
      .col-sm-7,
      .col-sm-8,
      .col-sm-9 {
        float: left
      }

      .col-sm-12 {
        width: 100%
      }

      .col-sm-11 {
        width: 91.66666667%
      }

      .col-sm-10 {
        width: 83.33333333%
      }

      .col-sm-9 {
        width: 75%
      }

      .col-sm-8 {
        width: 66.66666667%
      }

      .col-sm-7 {
        width: 58.33333333%
      }

      .col-sm-6 {
        width: 50%
      }

      .col-sm-5 {
        width: 41.66666667%
      }

      .col-sm-4 {
        width: 33.33333333%
      }

      .col-sm-3 {
        width: 25%
      }

      .col-sm-2 {
        width: 16.66666667%
      }

      .col-sm-1 {
        width: 8.33333333%
      }

      .col-sm-pull-12 {
        right: 100%
      }

      .col-sm-pull-11 {
        right: 91.66666667%
      }

      .col-sm-pull-10 {
        right: 83.33333333%
      }

      .col-sm-pull-9 {
        right: 75%
      }

      .col-sm-pull-8 {
        right: 66.66666667%
      }

      .col-sm-pull-7 {
        right: 58.33333333%
      }

      .col-sm-pull-6 {
        right: 50%
      }

      .col-sm-pull-5 {
        right: 41.66666667%
      }

      .col-sm-pull-4 {
        right: 33.33333333%
      }

      .col-sm-pull-3 {
        right: 25%
      }

      .col-sm-pull-2 {
        right: 16.66666667%
      }

      .col-sm-pull-1 {
        right: 8.33333333%
      }

      .col-sm-pull-0 {
        right: auto
      }

      .col-sm-push-12 {
        left: 100%
      }

      .col-sm-push-11 {
        left: 91.66666667%
      }

      .col-sm-push-10 {
        left: 83.33333333%
      }

      .col-sm-push-9 {
        left: 75%
      }

      .col-sm-push-8 {
        left: 66.66666667%
      }

      .col-sm-push-7 {
        left: 58.33333333%
      }

      .col-sm-push-6 {
        left: 50%
      }

      .col-sm-push-5 {
        left: 41.66666667%
      }

      .col-sm-push-4 {
        left: 33.33333333%
      }

      .col-sm-push-3 {
        left: 25%
      }

      .col-sm-push-2 {
        left: 16.66666667%
      }

      .col-sm-push-1 {
        left: 8.33333333%
      }

      .col-sm-push-0 {
        left: auto
      }

      .col-sm-offset-12 {
        margin-left: 100%
      }

      .col-sm-offset-11 {
        margin-left: 91.66666667%
      }

      .col-sm-offset-10 {
        margin-left: 83.33333333%
      }

      .col-sm-offset-9 {
        margin-left: 75%
      }

      .col-sm-offset-8 {
        margin-left: 66.66666667%
      }

      .col-sm-offset-7 {
        margin-left: 58.33333333%
      }

      .col-sm-offset-6 {
        margin-left: 50%
      }

      .col-sm-offset-5 {
        margin-left: 41.66666667%
      }

      .col-sm-offset-4 {
        margin-left: 33.33333333%
      }

      .col-sm-offset-3 {
        margin-left: 25%
      }

      .col-sm-offset-2 {
        margin-left: 16.66666667%
      }

      .col-sm-offset-1 {
        margin-left: 8.33333333%
      }

      .col-sm-offset-0 {
        margin-left: 0
      }
    }

    @media (min-width:992px) {

      .col-md-1,
      .col-md-10,
      .col-md-11,
      .col-md-12,
      .col-md-2,
      .col-md-3,
      .col-md-4,
      .col-md-5,
      .col-md-6,
      .col-md-7,
      .col-md-8,
      .col-md-9 {
        float: left
      }

      .col-md-12 {
        width: 100%
      }

      .col-md-11 {
        width: 91.66666667%
      }

      .col-md-10 {
        width: 83.33333333%
      }

      .col-md-9 {
        width: 75%
      }

      .col-md-8 {
        width: 66.66666667%
      }

      .col-md-7 {
        width: 58.33333333%
      }

      .col-md-6 {
        width: 50%
      }

      .col-md-5 {
        width: 41.66666667%
      }

      .col-md-4 {
        width: 33.33333333%
      }

      .col-md-3 {
        width: 25%
      }

      .col-md-2 {
        width: 16.66666667%
      }

      .col-md-1 {
        width: 8.33333333%
      }

      .col-md-pull-12 {
        right: 100%
      }

      .col-md-pull-11 {
        right: 91.66666667%
      }

      .col-md-pull-10 {
        right: 83.33333333%
      }

      .col-md-pull-9 {
        right: 75%
      }

      .col-md-pull-8 {
        right: 66.66666667%
      }

      .col-md-pull-7 {
        right: 58.33333333%
      }

      .col-md-pull-6 {
        right: 50%
      }

      .col-md-pull-5 {
        right: 41.66666667%
      }

      .col-md-pull-4 {
        right: 33.33333333%
      }

      .col-md-pull-3 {
        right: 25%
      }

      .col-md-pull-2 {
        right: 16.66666667%
      }

      .col-md-pull-1 {
        right: 8.33333333%
      }

      .col-md-pull-0 {
        right: auto
      }

      .col-md-push-12 {
        left: 100%
      }

      .col-md-push-11 {
        left: 91.66666667%
      }

      .col-md-push-10 {
        left: 83.33333333%
      }

      .col-md-push-9 {
        left: 75%
      }

      .col-md-push-8 {
        left: 66.66666667%
      }

      .col-md-push-7 {
        left: 58.33333333%
      }

      .col-md-push-6 {
        left: 50%
      }

      .col-md-push-5 {
        left: 41.66666667%
      }

      .col-md-push-4 {
        left: 33.33333333%
      }

      .col-md-push-3 {
        left: 25%
      }

      .col-md-push-2 {
        left: 16.66666667%
      }

      .col-md-push-1 {
        left: 8.33333333%
      }

      .col-md-push-0 {
        left: auto
      }

      .col-md-offset-12 {
        margin-left: 100%
      }

      .col-md-offset-11 {
        margin-left: 91.66666667%
      }

      .col-md-offset-10 {
        margin-left: 83.33333333%
      }

      .col-md-offset-9 {
        margin-left: 75%
      }

      .col-md-offset-8 {
        margin-left: 66.66666667%
      }

      .col-md-offset-7 {
        margin-left: 58.33333333%
      }

      .col-md-offset-6 {
        margin-left: 50%
      }

      .col-md-offset-5 {
        margin-left: 41.66666667%
      }

      .col-md-offset-4 {
        margin-left: 33.33333333%
      }

      .col-md-offset-3 {
        margin-left: 25%
      }

      .col-md-offset-2 {
        margin-left: 16.66666667%
      }

      .col-md-offset-1 {
        margin-left: 8.33333333%
      }

      .col-md-offset-0 {
        margin-left: 0
      }
    }

    @media (min-width:1200px) {

      .col-lg-1,
      .col-lg-10,
      .col-lg-11,
      .col-lg-12,
      .col-lg-2,
      .col-lg-3,
      .col-lg-4,
      .col-lg-5,
      .col-lg-6,
      .col-lg-7,
      .col-lg-8,
      .col-lg-9 {
        float: left
      }

      .col-lg-12 {
        width: 100%
      }

      .col-lg-11 {
        width: 91.66666667%
      }

      .col-lg-10 {
        width: 83.33333333%
      }

      .col-lg-9 {
        width: 75%
      }

      .col-lg-8 {
        width: 66.66666667%
      }

      .col-lg-7 {
        width: 58.33333333%
      }

      .col-lg-6 {
        width: 50%
      }

      .col-lg-5 {
        width: 41.66666667%
      }

      .col-lg-4 {
        width: 33.33333333%
      }

      .col-lg-3 {
        width: 25%
      }

      .col-lg-2 {
        width: 16.66666667%
      }

      .col-lg-1 {
        width: 8.33333333%
      }

      .col-lg-pull-12 {
        right: 100%
      }

      .col-lg-pull-11 {
        right: 91.66666667%
      }

      .col-lg-pull-10 {
        right: 83.33333333%
      }

      .col-lg-pull-9 {
        right: 75%
      }

      .col-lg-pull-8 {
        right: 66.66666667%
      }

      .col-lg-pull-7 {
        right: 58.33333333%
      }

      .col-lg-pull-6 {
        right: 50%
      }

      .col-lg-pull-5 {
        right: 41.66666667%
      }

      .col-lg-pull-4 {
        right: 33.33333333%
      }

      .col-lg-pull-3 {
        right: 25%
      }

      .col-lg-pull-2 {
        right: 16.66666667%
      }

      .col-lg-pull-1 {
        right: 8.33333333%
      }

      .col-lg-pull-0 {
        right: auto
      }

      .col-lg-push-12 {
        left: 100%
      }

      .col-lg-push-11 {
        left: 91.66666667%
      }

      .col-lg-push-10 {
        left: 83.33333333%
      }

      .col-lg-push-9 {
        left: 75%
      }

      .col-lg-push-8 {
        left: 66.66666667%;
      }

      .col-lg-push-7 {
        left: 58.33333333%;
      }

      .col-lg-push-6 {
        left: 50%;
      }

      .col-lg-push-5 {
        left:41.666666���?V ���?V `�?V p�?V X��?V ��?V @ ��?V sh-1 {
          left: 8.33????U ????U P~??U ?" ??U  ???U          ????U   @      ????U          66667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}table{background-color:transparent}caption{padding-top:8px;padding-bottom:8px;color:#777;text-align:left}th{text-align:left}.table{width:100%;max-width:100%;margin-bottom:20px}.table>tbody>tr>td,.table>tbody>tr>th,.table>tfoot>tr>td,.table>tfoot>tr>th,.table>thead>tr>td,.table>thead>tr>th{padding:8px;line-height:1.42857143;vertical-align:top;border-top:1px solid #ddd}.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid ?2???U  ?2???U                  @/b??U           ?b??U  X3???U          3???U   @      3???U          >tr:first-child>td,.table>colg?u??^U  ?u??^U                  {??^U          ?,??^U  ?u??^U          ?u??^U   @      ?u??^U          ??^U  ���^U          @��^U   @      @��^U                 `۰??U   @      `۰??U          @      @???U          nsed>thead>tr>th{pad04úøU  04úøU                  0颺øU          `úøU  4úøU          P4úøU   @      P4úøU          table-bordered>tfoot>tr>td,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border:1px solid #ddd}.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border-bottom-width:2px}.table-striped>tbody>tr:nth-of-type(odd){background-color:#f9f9f9}.table-hover>tbody>tr:hover{background-color:#f5f5f5}table col[class*=col-]{position:static;display:table-column;float:none}table td[class*=col-],table th[class*=col-]{position:static;display:table-cell;float:none}.table>tbody>tr.active>td,.table>tbody>tr.active>th,.table>tbody>tr>td.active,.table>tbody>tr>th.active,.table>tfoot>tr.active>td,.table>tfoot>tr.active>th,.table>tfoot>tr>td.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>thead>tr.active>th,.table>thead>tr>td.active,.table>thead>tr>th.active{background-color:#f5f5f5}.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr.active:hover>th,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover{background-color:#e8e8e8}.table>tbody>tr.success>td,.table>tbody>tr.success>th,.table>tbody>tr>td.success,.table>tbody>tr>th.success,.table>tfoot>tr.success>td,.table>tfoot>tr.success>th,.table>tfoot>tr>td.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>thead>tr.success>th,.table>thead>tr>td.success,.table>thead>tr>th.success{background-color:#dff0d8}.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr.success:hover>th,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover{background-color:#d0e9c6}.table>tbody>tr.info>td,.table>tbody>tr.info>th,.table>tbody>tr>td.info,.table>tbody>tr>th.info,.table>tfoot>tr.info>td,.table>tfoot>tr.info>th,.table>tfoot>tr>td.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>thead>tr.info>th,.table>thead>tr>td.info,.table>thead>tr>th.info{background-color:#d9edf7}.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr.info:hover>th,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover{background-color:#c4e3f3}.table>tbody>tr.warning>td,.table>tbody>tr.warning>th,.table>tbody>tr>td.warning,.table>tbody>tr>th.warning,.table>tfoot>tr.warning>td,.table>tfoot>tr.warning>th,.table>tfoot>tr>td.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>thead>tr.warning>th,.table>thead>tr>td.warning,.table>thead>tr>th.warning{background-color:#fcf8e3}.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr.warning:hover>th,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover{background-color:#faf2cc}.table>tbody>tr.danger>td,.table>tbody>tr.danger>th,.table>tbody>tr>td.danger,.table>tbody>tr>th.danger,.table>tfoot>tr.danger>td,.table>tfoot>tr.danger>th,.table>tfoot>tr>td.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>thead>tr.danger>th,.table>thead>tr>td.danger,.table>thead>tr>th.danger{background-color:#f2dede}.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr.danger:hover>th,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover{background-color:#ebcccc}.table-responsive{min-height:.01%;overflow-x:auto}@media screen and (max-width:767px){.table-responsive{width:100%;margin-bottom:15px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}}fieldset{min-width:0;padding:0;margin:0;border:0}legend{display:block;width:100%;padding:0;margin-bottom:20px;font-size:21px;line-height:inherit;color:#333;border:0;border-bottom:1px solid #e5e5e5}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}input[type=search]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}input[type=checkbox],input[type=radio]{margin:4px 0 0;margin-top:1px\9;line-height:normal}input[type=file]{display:block}input[type=range]{display:block;width:100%}select[multiple],select[size]{height:auto}input[type=file]:focus,input[type=checkbox]:focus,input[type=radio]:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}output{display:block;padding-top:7px;font-size:14px;line-height:1.42857143;color:#555}.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}.form-control::-ms-expand{background-color:transparent;border:0}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{background-color:#eee;opacity:1}.form-control[disabled],fieldset[disabled] .form-control{cursor:not-allowed}textarea.form-control{height:auto}input[type=search]{-webkit-appearance:none}@media screen and (-webkit-min-device-pixel-ratio:0){input[type=date].form-control,input[type=time].form-control,input[type=datetime-local].form-control,input[type=month].form-control{line-height:34px}.input-group-sm input[type=date],.input-group-sm input[type=time],.input-group-sm input[type=datetime-local],.input-group-sm input[type=month],input[type=date].input-sm,input[type=time].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm{line-height:30px}.input-group-lg input[type=date],.input-group-lg input[type=time],.input-group-lg input[type=datetime-local],.input-group-lg input[type=month],input[type=date].input-lg,input[type=time].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg{line-height:46px}}.form-group{margin-bottom:15px}.checkbox,.radio{position:relative;display:block;margin-top:10px;margin-bottom:10px}.checkbox label,.radio label{min-height:20px;padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer}.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox],.radio input[type=radio],.radio-inline input[type=radio]{position:absolute;margin-top:4px\9;margin-left:-20px}.checkbox+.checkbox,.radio+.radio{margin-top:-5px}.checkbox-inline,.radio-inline{position:relative;display:inline-block;padding-left:20px;margin-bottom:0;font-weight:400;vertical-align:middle;cursor:pointer}.checkbox-inline+.checkbox-inline,.radio-inline+.radio-inline{margin-top:0;margin-left:10px}fieldset[disabled] input[type=checkbox],fieldset[disabled] input[type=radio],input[type=checkbox].disabled,input[type=checkbox][disabled],input[type=radio].disabled,input[type=radio][disabled]{cursor:not-allowed}.checkbox-inline.disabled,.radio-inline.disabled,fieldset[disabled] .checkbox-inline,fieldset[disabled] .radio-inline{cursor:not-allowed}.checkbox.disabled label,.radio.disabled label,fieldset[disabled] .checkbox label,fieldset[disabled] .radio label{cursor:not-allowed}.form-control-static{min-height:34px;padding-top:7px;padding-bottom:7px;margin-bottom:0}.form-control-static.input-lg,.form-control-static.input-sm{padding-right:0;padding-left:0}.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-sm{height:30px;line-height:30px}select[multiple].input-sm,textarea.input-sm{height:auto}.form-group-sm .form-control{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.form-group-sm select.form-control{height:30px;line-height:30px}.form-group-sm select[multiple].form-control,.form-group-sm textarea.form-control{height:auto}.form-group-sm .form-control-static{height:30px;min-height:32px;padding:6px 10px;font-size:12px;line-height:1.5}.input-lg{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-lg{height:46px;line-height:46px}select[multiple].input-lg,textarea.input-lg{height:auto}.form-group-lg .form-control{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.form-group-lg select.form-control{height:46px;line-height:46px}.form-group-lg select[multiple].form-control,.form-group-lg textarea.form-control{height:auto}.form-group-lg .form-control-static{height:46px;min-height:38px;padding:11px 16px;font-size:18px;line-height:1.3333333}.has-feedback{position:relative}.has-feedback .form-control{padding-right:42.5px}.form-control-feedback{position:absolute;top:0;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center;pointer-events:none}.form-group-lg .form-control+.form-control-feedback,.input-group-lg+.form-control-feedback,.input-lg+.form-control-feedback{width:46px;height:46px;line-height:46px}.form-group-sm .form-control+.form-control-feedback,.input-group-sm+.form-control-feedback,.input-sm+.form-control-feedback{width:30px;height:30px;line-height:30px}.has-success .checkbox,.has-success .checkbox-inline,.has-success .control-label,.has-success .help-block,.has-success .radio,.has-success .radio-inline,.has-success.checkbox label,.has-success.checkbox-inline label,.has-success.radio label,.has-success.radio-inline label{color:#3c763d}.has-success .form-control{border-color:#3c763d;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-success .form-control:focus{border-color:#2b542c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168}.has-success .input-group-addon{color:#3c763d;background-color:#dff0d8;border-color:#3c763d}.has-success .form-control-feedback{color:#3c763d}.has-warning .checkbox,.has-warning .checkbox-inline,.has-warning .control-label,.has-warning .help-block,.has-warning .radio,.has-warning .radio-inline,.has-warning.checkbox label,.has-warning.checkbox-inline label,.has-warning.radio label,.has-warning.radio-inline label{color:#8a6d3b}.has-warning .form-control{border-color:#8a6d3b;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-warning .form-control:focus{border-color:#66512c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b}.has-warning .input-group-addon{color:#8a6d3b;background-color:#fcf8e3;border-color:#8a6d3b}.has-warning .form-control-feedback{color:#8a6d3b}.has-error .checkbox,.has-error .checkbox-inline,.has-error .control-label,.has-error .help-block,.has-error .radio,.has-error .radio-inline,.has-error.checkbox label,.has-error.checkbox-inline label,.has-error.radio label,.has-error.radio-inline label{color:#a94442}.has-error .form-control{border-color:#a94442;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-error .form-control:focus{border-color:#843534;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483}.has-error .input-group-addon{color:#a94442;background-color:#f2dede;border-color:#a94442}.has-error .form-control-feedback{color:#a94442}.has-feedback label~.form-control-feedback{top:25px}.has-feedback label.sr-only~.form-control-feedback{top:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}@media (min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-static{display:inline-block}.form-inline .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .form-control,.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn{width:auto}.form-inline .input-group>.form-control{width:100%}.form-inline .control-label{margin-bottom:0;vertical-align:middle}.form-inline .checkbox,.form-inline .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.form-inline .checkbox label,.form-inline .radio label{padding-left:0}.form-inline .checkbox input[type=checkbox],.form-inline .radio input[type=radio]{position:relative;margin-left:0}.form-inline .has-feedback .form-control-feedback{top:0}}.form-horizontal .checkbox,.form-horizontal .checkbox-inline,.form-horizontal .radio,.form-horizontal .radio-inline{padding-top:7px;margin-top:0;margin-bottom:0}.form-horizontal .checkbox,.form-horizontal .radio{min-height:27px}.form-horizontal .form-group{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.form-horizontal .control-label{padding-top:7px;margin-bottom:0;text-align:right}}.form-horizontal .has-feedback .form-control-feedback{right:15px}@media (min-width:768px){.form-horizontal .form-group-lg .control-label{padding-top:11px;font-size:18px}}@media (min-width:768px){.form-horizontal .form-group-sm .control-label{padding-top:6px;font-size:12px}}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:mid���?V  ���?V                  `�?V          p�?V  X��?V          ��?V   @      ��?V          -user-select:n????U  ????U                  P~??U          ?" ??U ???U ????U @ ????U us:4px
        }
      

        .btn.active.focus,
        .btn.active:focus,
        .btn.focus,
        .btn:active.focus,
        .btn:active:focus,
        .btn:focus {
          outline: 5px auto -webkit-focus-ring-color;
          outline-offset: -2px;
        }

        .btn.focus,
        .btn:focus,
        .btn:hover {
          color: #333;
          text-decoration: none
        }

        .btn.active,
        .btn:active {
          background-image: none;
          outline: 0;
          -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
          box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);

        }

        .btn.disabled,
        .btn[disabled],
        fieldset[disabled] .btn {
          cursor: not-allowed;
          filter: alpha(opacity=65);
          -webkit-box-shadow: none;
          box-shadow: none;
          opacity: .65
        }

        a.btn.disabled,
        fieldset[disabled] a.btn {
          pointer-events: none
        }

        .btn-default {
          color: #333;
          background-color: #fff;
          border-color: #ccc
        }

        .btn-default.focus,
        .btn-default:focus {
          color: #333;
          background-color: #e6e6e6;
          border-color: #8c8c8c
        }

        .btn-default:hover {
          color: #333;
          background-color: #e6e6e6;
          border-color: #adadad
        }

        .btn-default.active,
        .btn-default:active,
        .open>.dropdown-toggle.btn-default {
          c?2???U ?2???U @/b??U ?b??U X3???U 3???U @ 3???U ?u??^U ?u??^U  {
            ??^U ?,
            ??^U ?u??^U ?u??^U @ ?u??^U `0��^U ����^U ���^U @��^U @ @��^U `۰??U @ `۰??U @ @???U mage:none
          }

          .btn-default.disabled.focus, .bt04úøU 04úøU 0颺øU `úøU 4úøU P4úøU @ P4úøU :focus, .btn-default[disabled]:hover, fieldset[disabled] .btn-default.focus, fieldset[disabled] .btn-default:focus, fieldset[disabled] .btn-default:hover {
            background-color: #fff;
            border-color: #ccc
          }

          .btn-default .badge {
            color: #fff;
            background-color: #333
          }

          .btn-primary {
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4
          }

          .btn-primary.focus,
          .btn-primary:focus {
            color: #fff;
            background-color: #286090;
            border-color: #122b40
          }

          .btn-primary:hover {
            color: #fff;
            background-color: #286090;
            border-color: #204d74
          }

          .btn-primary.active,
          .btn-primary:active,
          .open>.dropdown-toggle.btn-primary {
            color: #fff;
            background-color: #286090;
            border-color: #204d74
          }

          .btn-primary.active.focus,
          .btn-primary.active:focus,
          .btn-primary.active:hover,
          .btn-primary:active.focus,
          .btn-primary:active:focus,
          .btn-primary:active:hover,
          .open>.dropdown-toggle.btn-primary.focus,
          .open>.dropdown-toggle.btn-primary:focus,
          .open>.dropdown-toggle.btn-primary:hover {
            color: #fff;
            background-color: #204d74;
            border-color: #122b40
          }

          .btn-primary.active,
          .btn-primary:active,
          .open>.dropdown-toggle.btn-primary {
            background-image: none
          }

          .btn-primary.disabled.focus,
          .btn-primary.disabled:focus,
          .btn-primary.disabled:hover,
          .btn-primary[disabled].focus,
          .btn-primary[disabled]:focus,
          .btn-primary[disabled]:hover,
          fieldset[disabled] .btn-primary.focus,
          fieldset[disabled] .btn-primary:focus,
          fieldset[disabled] .btn-primary:hover {
            background-color: #337ab7;
            border-color: #2e6da4
          }

          .btn-primary .badge {
            color: #337ab7;
            background-color: #fff
          }

          .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c
          }

          .btn-success.focus,
          .btn-success:focus {
            color: #fff;
            background-color: #449d44;
            border-color: #255625
          }

          .btn-success:hover {
            color: #fff;
            background-color: #449d44;
            border-color: #398439
          }

          .btn-success.active,
          .btn-success:active,
          .open>.dropdown-toggle.btn-success {
            color: #fff;
            background-color: #449d44;
            border-color: #398439
          }

          .btn-success.active.focus,
          .btn-success.active:focus,
          .btn-success.active:hover,
          .btn-success:active.focus,
          .btn-success:active:focus,
          .btn-success:active:hover,
          .open>.dropdown-toggle.btn-success.focus,
          .open>.dropdown-toggle.btn-success:focus,
          .open>.dropdown-toggle.btn-success:hover {
            color: #fff;
            background-color: #398439;
            border-color: #255625
          }

          .btn-success.active,
          .btn-success:active,
          .open>.dropdown-toggle.btn-success {
            background-image: none
          }

          .btn-success.disabled.focus,
          .btn-success.disabled:focus,
          .btn-success.disabled:hover,
          .btn-success[disabled].focus,
          .btn-success[disabled]:focus,
          .btn-success[disabled]:hover,
          fieldset[disabled] .btn-success.focus,
          fieldset[disabled] .btn-success:focus,
          fieldset[disabled] .btn-success:hover {
            background-color: #5cb85c;
            border-color: #4cae4c
          }

          .btn-success .badge {
            color: #5cb85c;
            background-color: #fff
          }

          .btn-info {
            color: #fff;
            background-color: #5bc0de;
            border-color: #46b8da
          }

          .btn-info.focus,
          .btn-info:focus {
            color: #fff;
            background-color: #31b0d5;
            border-color: #1b6d85
          }

          .btn-info:hover {
            color: #fff;
            background-color: #31b0d5;
            border-color: #269abc
          }

          .btn-info.active,
          .btn-info:active,
          .open>.dropdown-toggle.btn-info {
            color: #fff;
            background-color: #31b0d5;
            border-color: #269abc
          }

          .btn-info.active.focus,
          .btn-info.active:focus,
          .btn-info.active:hover,
          .btn-info:active.focus,
          .btn-info:active:focus,
          .btn-info:active:hover,
          .open>.dropdown-toggle.btn-info.focus,
          .open>.dropdown-toggle.btn-info:focus,
          .open>.dropdown-toggle.btn-info:hover {
            color: #fff;
            background-color: #269abc;
            border-color: #1b6d85
          }

          .btn-info.active,
          .btn-info:active,
          .open>.dropdown-toggle.btn-info {
            background-image: none
          }

          .btn-info.disabled.focus,
          .btn-info.disabled:focus,
          .btn-info.disabled:hover,
          .btn-info[disabled].focus,
          .btn-info[disabled]:focus,
          .btn-info[disabled]:hover,
          fieldset[disabled] .btn-info.focus,
          fieldset[disabled] .btn-info:focus,
          fieldset[disabled] .btn-info:hover {
            background-color: #5bc0de;
            border-color: #46b8da
          }

          .btn-info .badge {
            color: #5bc0de;
            background-color: #fff
          }

          .btn-warning {
            color: #fff;
            background-color: #f0ad4e;
            border-color: #eea236
          }

          .btn-warning.focus,
          .btn-warning:focus {
            color: #fff;
            background-color: #ec971f;
            border-color: #985f0d
          }

          .btn-warning:hover {
            color: #fff;
            background-color: #ec971f;
            border-color: #d58512
          }

          .btn-warning.active,
          .btn-warning:active,
          .open>.dropdown-toggle.btn-warning {
            color: #fff;
            background-color: #ec971f;
            border-color: #d58512
          }

          .btn-warning.active.focus,
          .btn-warning.active:focus,
          .btn-warning.active:hover,
          .btn-warning:active.focus,
          .btn-warning:active:focus,
          .btn-warning:active:hover,
          .open>.dropdown-toggle.btn-warning.focus,
          .open>.dropdown-toggle.btn-warning:focus,
          .open>.dropdown-toggle.btn-warning:hover {
            color: #fff;
            background-color: #d58512;
            border-color: #985f0d
          }

          .btn-warning.active,
          .btn-warning:active,
          .open>.dropdown-toggle.btn-warning {
            background-image: none
          }

          .btn-warning.disabled.focus,
          .btn-warning.disabled:focus,
          .btn-warning.disabled:hover,
          .btn-warning[disabled].focus,
          .btn-warning[disabled]:focus,
          .btn-warning[disabled]:hover,
          fieldset[disabled] .btn-warning.focus,
          fieldset[disabled] .btn-warning:focus,
          fieldset[disabled] .btn-warning:hover {
            background-color: #f0ad4e;
            border-color: #eea236
          }

          .btn-warning .badge {
            color: #f0ad4e;
            background-color: #fff
          }

          .btn-danger {
            color: #fff;
            background-color: #d9534f;
            border-color: #d43f3a
          }

          .btn-danger.focus,
          .btn-danger:focus {
            color: #fff;
            background-color: #c9302c;
            border-color: #761c19
          }

          .btn-danger:hover {
            color: #fff;
            background-color: #c9302c;
            border-color: #ac2925
          }

          .btn-danger.active,
          .btn-danger:active,
          .open>.dropdown-toggle.btn-danger {
            color: #fff;
            background-color: #c9302c;
            border-color: #ac2925
          }

          .btn-danger.active.focus,
          .btn-danger.active:focus,
          .btn-danger.active:hover,
          .btn-danger:active.focus,
          .btn-danger:active:focus,
          .btn-danger:active:hover,
          .open>.dropdown-toggle.btn-danger.focus,
          .open>.dropdown-toggle.btn-danger:focus,
          .open>.dropdown-toggle.btn-danger:hover {
            color: #fff;
            background-color: #ac2925;
            border-color: #761c19
          }

          .btn-danger.active,
          .btn-danger:active,
          .open>.dropdown-toggle.btn-danger {
            background-image: none
          }

          .btn-danger.disabled.focus,
          .btn-danger.disabled:focus,
          .btn-danger.disabled:hover,
          .btn-danger[disabled].focus,
          .btn-danger[disabled]:focus,
          .btn-danger[disabled]:hover,
          fieldset[disabled] .btn-danger.focus,
          fieldset[disabled] .btn-danger:focus,
          fieldset[disabled] .btn-danger:hover {
            background-color: #d9534f;
            border-color: #d43f3a
          }

          .btn-danger .badge {
            color: #d9534f;
            background-color: #fff
          }

          .btn-link {
            font-weight: 400;
            color: #337ab7;
            border-radius: 0
          }

          .btn-link,
          .btn-link.active,
          .btn-link:active,
          .btn-link[disabled],
          fieldset[disabled] .btn-link {
            background-color: transparent;
            -webkit-box-shadow: none;
            box-shadow: none
          }

          .btn-link,
          .btn-link:active,
          .btn-link:focus,
          .btn-link:hover {
            border-color: transparent
          }

          .btn-link:focus,
          .btn-link:hover {
            color: #23527c;
            text-decoration: underline;
            background-color: transparent
          }

          .btn-link[disabled]:focus,
          .btn-link[disabled]:hover,
          fieldset[disabled] .btn-link:focus,
          fieldset[disabled] .btn-link:hover {
            color: #777;
            text-decoration: none
          }

          .btn-group-lg>.btn,
          .btn-lg {
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.3333333;
            border-radius: 6px
          }

          .btn-group-sm>.btn,
          .btn-sm {
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px
          }

          .btn-group-xs>.btn,
          .btn-xs {
            padding: 1px 5px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px
          }

          .btn-block {
            display: block;
            width: 100%
          }

          .btn-block+.btn-block {
            margin-top: 5px
          }

          input[type=button].btn-block,
          input[type=reset].btn-block,
          input[type=submit].btn-block {
            width: 100%
          }

          .fade {
            opacity: 0;
            -webkit-transition: opacity .15s linear;
            -o-transition: opacity .15s linear;
            transition: opacity .15s linear
          }

          .fade.in {
            opacity: 1
          }

          .collapse {
            display: none
          }

          .collapse.in {
            display: block
          }

          tr.collapse.in {
            display: table-row
          }

          tbody.collapse.in {
            display: table-row-group
          }

          .collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            -webkit-transition-timing-function: ease;
            -o-transition-timing-function: ease;
            transition-timing-function: ease;
            -webkit-transition-duration: .35s;
            -o-transition-duration: .35s;
            transition-duration: .35s;
            -webkit-transition-property: height, visibility;
            -o-transition-property: height, visibility;
            transition-property: height, visibility
          }

          .caret {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: 2px;
            vertical-align: middle;
            border-top: 4px dashed;
            border-top: 4px solid\9;
            border-right: 4px solid transparent;
            border-left: 4px solid transparent
          }

          .dropdown,
          .dropup {
            position: relative
          }

          .dropdown-toggle:focus {
            outline: 0
          }

          .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 160px;
            padding: 5px 0;
            margin: 2px 0 0;
            font-size: 14px;
            text-align: left;
            list-style: none;
            background-color: #fff;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: 4px;
            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .175)
          }

          .dropdown-menu.pull-right {
            right: 0;
            left: auto
          }

          .dropdown-menu .divider {
            height: 1px;
            margin: 9px 0;
            overflow: hidden;
            background-color: #e5e5e5
          }

          .dropdown-menu>li>a {
            display: block;
            padding: 3px 20px;
            clear: both;
            font-weight: 400;
            line-height: 1.42857143;
            color: #333;
            white-space: nowrap
          }

          .dropdown-menu>li>a:focus,
          .dropdown-menu>li>a:hover {
            color: #262626;
            text-decoration: none;
            background-color: #f5f5f5
          }

          .dropdown-menu>.active>a,
          .dropdown-menu>.active>a:focus,
          .dropdown-menu>.active>a:hover {
            color: #fff;
            text-decoration: none;
            background-color: #337ab7;
            outline: 0
          }

          .dropdown-menu>.disabled>a,
          .dropdown-menu>.disabled>a:focus,
          .dropdown-menu>.disabled>a:hover {
            color: #777
          }

          .dropdown-menu>.disabled>a:focus,
          .dropdown-menu>.disabled>a:hover {
            text-decoration: none;
            cursor: not-allowed;
            background-color: transparent;
            background-image: none;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false)
          }

          .open>.dropdown-menu {
            display: block
          }

          .open>a {
            outline: 0
          }

          .dropdown-menu-right {
            right: 0;
            left: auto
          }

          .dropdown-menu-left {
            right: auto;
            left: 0
          }

          .dropdown-header {
            display: block;
            padding: 3px 20px;
            font-size: 12px;
            line-height: 1.42857143;
            color: #777;
            white-space: nowrap
          }

          .dropdown-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 990
          }

          .pull-right>.dropdown-menu {
            right: 0;
            left: auto
          }

          .dropup .caret,
          .navbar-fixed-bottom .dropdown .caret {
            content: "";
            border-top: 0;
            border-bottom: 4px dashed;
            border-bottom: 4px solid\9
          }

          .dropup .dropdown-menu,
          .navbar-fixed-bottom .dropdown .dropdown-menu {
            top: auto;
            bottom: 100%;
            margin-bottom: 2px
          }

          @media (min-width:768px) {
            .navbar-right .dropdown-menu {
              right: 0;
              left: auto
            }

            .navbar-right .dropdown-menu-left {
              right: auto;
              left: 0
            }
          }

          .btn-group,
          .btn-group-vertical {
            position: relative;
            display: inline-block;
            vertical-align: middle
          }

          .btn-group-vertical>.btn,
          .btn-group>.btn {
            position: relative;
            float: left
          }

          .btn-group-vertical>.btn.active,
          .btn-group-vertical>.btn:active,
          .btn-group-vertical>.btn:focus,
          .btn-group-vertical>.btn:hover,
          .btn-group>.btn.active,
          .btn-group>.btn:active,
          .btn-group>.btn:focus,
          .btn-group>.btn:hover {
            z-index: 2
          }

          .btn-group .btn+.btn,
          .btn-group .btn+.btn-group,
          .btn-group .btn-group+.btn,
          .btn-group .btn-group+.btn-group {
            margin-left: -1px
          }

          .btn-toolbar {
            margin-left: -5px
          }

          .btn-toolbar .btn,
          .btn-toolbar .btn-group,
          .btn-toolbar .input-group {
            float: left
          }

          .btn-toolbar>.btn,
          .btn-toolbar>.btn-group,
          .btn-toolbar>.input-group {
            margin-left: 5px
          }

          .btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
            border-radius: 0
          }

          .btn-group>.btn:first-child {
            margin-left: 0
          }

          .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
          }

          .btn-group>.btn:last-child:not(:first-child),
          .btn-group>.dropdown-toggle:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
          }

          .btn-group>.btn-group {
            float: left
          }

          .btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
            border-radius: 0
          }

          .btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
          .btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
          }

          .btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
          }

          .btn-group .dropdown-toggle:active,
          .btn-group.open .dropdown-toggle {
            outline: 0
          }

          .btn-group>.btn+.dropdown-toggle {
            padding-right: 8px;
            padding-left: 8px
          }

          .btn-group>.btn-lg+.dropdown-toggle {
            padding-right: 12px;
            padding-left: 12px
          }

          .btn-group.open .dropdown-toggle {
            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
          }

          .btn-group.open .dropdown-toggle.btn-link {
            -webkit-box-shadow: none;
            box-shadow: none
          }

          .btn .caret {
            margin-left: 0
          }

          .btn-lg .caret {
            border-width: 5px 5px 0;
            border-bottom-width: 0
          }

          .dropup .btn-lg .caret {
            border-width: 0 5px 5px
          }

          .btn-group-vertical>.btn,
          .btn-group-vertical>.btn-group,
          .btn-group-vertical>.btn-group>.btn {
            display: block;
            float: none;
            width: 100%;
            max-width: 100%
          }

          .btn-group-vertical>.btn-group>.btn {
            float: none
          }

          .btn-group-vertical>.btn+.btn,
          .btn-group-vertical>.btn+.btn-group,
          .btn-group-vertical>.btn-group+.btn,
          .btn-group-vertical>.btn-group+.btn-group {
            margin-top: -1px;
            margin-left: 0
          }

          .btn-group-vertical>.btn:not(:first-child):not(:last-child) {
            border-radius: 0
          }

          .btn-group-vertical>.btn:first-child:not(:last-child) {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
          }

          .btn-group-vertical>.btn:last-child:not(:first-child) {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px
          }

          .btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
            border-radius: 0
          }

          .btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,
          .btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
          }

          .btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
            border-top-left-radius: 0;
            border-top-right-radius: 0
          }

          .btn-group-justified {
            display: table;
            width: 100%;
            table-layout: fixed;
            border-collapse: separate
          }

          .btn-group-justified>.btn,
          .btn-group-justified>.btn-group {
            display: table-cell;
            float: none;
            width: 1%
          }

          .btn-group-justified>.btn-group .btn {
            width: 100%
          }

          .btn-group-justified>.btn-group .dropdown-menu {
            left: auto
          }

          [data-toggle=buttons]>.btn input[type=checkbox],
          [data-toggle=buttons]>.btn input[type=radio],
          [data-toggle=buttons]>.btn-group>.btn input[type=checkbox],
          [data-toggle=buttons]>.btn-group>.btn input[type=radio] {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none
          }

          .input-group {
            position: relative;
            display: table;
            border-collapse: separate
          }

          .input-group[class*=col-] {
            float: none;
            padding-right: 0;
            padding-left: 0
          }

          .input-group .form-control {
            position: relative;
            z-index: 2;
            float: left;
            width: 100%;
            margin-bottom: 0
          }

          .input-group .form-control:focus {
            z-index: 3
          }

          .input-group-lg>.form-control,
          .input-group-lg>.input-group-addon,
          .input-group-lg>.input-group-btn>.btn {
            height: 46px;
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.3333333;
            border-radius: 6px
          }

          select.input-group-lg>.form-control,
          select.input-group-lg>.input-group-addon,
          select.input-group-lg>.input-group-btn>.btn {
            height: 46px;
            line-height: 46px
          }

          select[multiple].input-group-lg>.form-control,
          select[multiple].input-group-lg>.input-group-addon,
          select[multiple].input-group-lg>.input-group-btn>.btn,
          textarea.input-group-lg>.form-control,
          textarea.input-group-lg>.input-group-addon,
          textarea.input-group-lg>.input���?V ���?V `�?V p�?V X��?V ��?V @ ��?V p-sm>.input-gr????U ????U P~??U ?" ??U  ???U          ????U   @      ????U          group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn{height:30px;line-height:30px}select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn,textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn{height:auto}.input-group .form-control,.input-group-addon,.input-group-btn{display:table-cell}.input-group .form-control:not(:first-child):not(:last-child),.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child){border-radius:0}.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}.input-group-addon{padding:6px 12px;font-size:14px;font-weight:400;line-height:1;color:#555;text-align:center;background-color:#eee;}.input-group-addon.in?2???U  ?2???U                  @/b??U           ?b??U  X3???U      ?u??^U  ?u??^U                  {??^U          ?,??^U  ?u??^U          ?u??^U   @      ?u??^U          ��^U   ��^U                  `0��^U          ����^U  ���^U          @��^U   @      @��^U               `۰??U   @      `۰??U          @      @???U          n-toggle,.input-group-btn:last-child>.btn-group:not(:last-chil04úøU  04úøU                  0颺øU          `úøU  4úøU          P4úøU   @      P4úøU          0;border-bottom-right-radius:0}.input-group-addon:first-child{border-right:0}.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:first-child>.btn-group:not(:first-child)>.btn,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle{border-top-left-radius:0;border-bottom-left-radius:0}.input-group-addon:last-child{border-left:0}.input-group-btn{position:relative;font-size:0;white-space:nowrap}.input-group-btn>.btn{position:relative}.input-group-btn>.btn+.btn{margin-left:-1px}.input-group-btn>.btn:active,.input-group-btn>.btn:focus,.input-group-btn>.btn:hover{z-index:2}.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group{margin-right:-1px}.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group{z-index:2;margin-left:-1px}.nav{padding-left:0;margin-bottom:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.nav>li>a:focus,.nav>li>a:hover{text-decoration:none;background-color:#eee}.nav>li.disabled>a{color:#777}.nav>li.disabled>a:focus,.nav>li.disabled>a:hover{color:#777;text-decoration:none;cursor:not-allowed;background-color:transparent}.nav .open>a,.nav .open>a:focus,.nav .open>a:hover{background-color:#eee;border-color:#337ab7}.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.nav>li>a>img{max-width:none}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover{color:#555;cursor:default;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li{float:none}.nav-tabs.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0}}.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border-bottom-color:#fff}}.nav-pills>li{float:left}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{color:#fff;background-color:#337ab7}.nav-stacked>li{float:none}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li{float:none}.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}.nav-tabs-justified{border-bottom:0}.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border-bottom-color:#fff}}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;-webkit-overflow-scrolling:touch;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1)}.navbar-collapse.in{overflow-y:auto}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}.navbar-collapse.in{overflow-y:visible}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse{padding-right:0;padding-left:0}}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:200px}}.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-static-top{z-index:1000;border-width:0 0 1px}@media (min-width:768px){.navbar-static-top{border-radius:0}}.navbar-fixed-bottom,.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-bottom,.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.navbar-brand{float:left;height:50px;padding:15px 15px;font-size:18px;line-height:20px}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-brand>img{display:block}@media (min-width:768px){.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}@media (max-width:767px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;-webkit-box-shadow:none;box-shadow:none}.navbar-nav .open .dropdown-menu .dropdown-header,.navbar-nav .open .dropdown-menu>li>a{padding:5px 15px 5px 25px}.navbar-nav .open .dropdown-menu>li>a{line-height:20px}.navbar-nav .open .dropdown-menu>li>a:focus,.navbar-nav .open .dropdown-menu>li>a:hover{background-image:none}}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}}.navbar-form{padding:10px 15px;margin-top:8px;margin-right:-15px;margin-bottom:8px;margin-left:-15px;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1)}@media (min-width:768px){.navbar-form .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.navbar-form .form-control{display:inline-block;width:auto;vertical-align:middle}.navbar-form .form-control-static{display:inline-block}.navbar-form .input-group{display:inline-table;vertical-align:middle}.navbar-form .input-group .form-control,.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn{width:auto}.navbar-form .input-group>.form-control{width:100%}.navbar-form .control-label{margin-bottom:0;vertical-align:middle}.navbar-form .checkbox,.navbar-form .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.navbar-form .checkbox label,.navbar-form .radio label{padding-left:0}.navbar-form .checkbox input[type=checkbox],.navbar-form .radio input[type=radio]{position:relative;margin-left:0}.navbar-form .has-feedback .form-control-feedback{top:0}}@media (max-width:767px){.navbar-form .form-group{margin-bottom:5px}.navbar-form .form-group:last-child{margin-bottom:0}}@media (min-width:768px){.navbar-form{width:auto;padding-top:0;padding-bottom:0;margin-right:0;margin-left:0;border:0;-webkit-box-shadow:none;box-shadow:none}}.navbar-nav>li>.dropdown-menu{margin-top:0;border-top-left-radius:0;border-top-right-radius:0}.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{margin-bottom:0;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.navbar-btn{margin-top:8px;margin-bottom:8px}.navbar-btn.btn-sm{margin-top:10px;margin-bottom:10px}.navbar-btn.btn-xs{margin-top:14px;margin-bottom:14px}.navbar-text{margin-top:15px;margin-bottom:15px}@media (min-width:768px){.navbar-text{float:left;margin-right:15px;margin-left:15px}}@media (min-width:768px){.navbar-left{float:left!important}.navbar-right{float:right!important;margin-right:-15px}.navbar-right~.navbar-right{margin-right:0}}.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover{color:#5e5e5e;background-color:transparent}.navbar-default .navbar-text{color:#777}.navbar-default .navbar-nav>li>a{color:#777}.navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover{color:#333;background-color:transparent}.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:focus,.navbar-default .navbar-nav>.active>a:hover{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:focus,.navbar-default .navbar-nav>.disabled>a:hover{color:#ccc;background-color:transparent}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover{background-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse,.navbar-default .navbar-form{border-color:#e7e7e7}.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:focus,.navbar-default .navbar-nav>.open>a:hover{color:#555;background-color:#e7e7e7}@media (max-width:767px){.navbar-default .navbar-nav .open .dropdown-menu>li>a{color:#777}.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover{color:#333;background-color:transparent}.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#ccc;background-color:transparent}}.navbar-default .navbar-link{color:#777}.navbar-default .navbar-link:hover{color:#333}.navbar-default .btn-link{color:#777}.navbar-default .btn-link:focus,.navbar-default .btn-link:hover{color:#333}.navbar-default .btn-link[disabled]:focus,.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:focus,fieldset[disabled] .navbar-default .btn-link:hover{color:#ccc}.navbar-inverse{background-color:#222;border-color:#080808}.navbar-inverse .navbar-brand{color:#9d9d9d}.navbar-inverse .navbar-brand:focus,.navbar-inverse .navbar-brand:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-text{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a:focus,.navbar-inverse .navbar-nav>li>a:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:focus,.navbar-inverse .navbar-nav>.active>a:hover{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:focus,.navbar-inverse .navbar-nav>.disabled>a:hover{color:#444;background-color:transparent}.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:focus,.navbar-inverse .navbar-toggle:hover{background-color:#333}.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form{border-color:#101010}.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:focus,.navbar-inverse .navbar-nav>.open>a:hover{color:#fff;background-color:#080808}@media (max-width:767px){.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header{border-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu .divider{background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#444;background-color:transparent}}.navbar-inverse .navbar-link{color:#9d9d9d}.navbar-inverse .navbar-link:hover{color:#fff}.navbar-inverse .btn-link{color:#9d9d9d}.navbar-inverse .btn-link:focus,.navbar-inverse .btn-link:hover{color:#fff}.navbar-inverse .btn-link[disabled]:focus,.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:focus,fieldset[disabled] .navbar-inverse .btn-link:hover{color:#444}.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#f5f5f5;border-radius:4px}.breadcrumb>li{display:inline-block}.breadcrumb>li+li:before{padding:0 5px;color:#ccc;content:" /\00a0"}.breadcrumb>.active{color:#777}.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42���?V  ���?V                  `�?V          p�?V  X��?V          ��?V   @      ��?V          st-child>a,.pa????U  ????U                  P~??U          ?" ??U ???U ????U @ ????U ination>li:last-child>a, .pagination>li:last-child>span {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px
          }

          .pagination>li>a:focus,
          .pagination>li>a:hover,
          .pagination>li>span:focus,
          .pagination>li>span:hover {
            z-index: 2;
            color: #23527c;
            background-color: #eee;
            border-color: #ddd
          }

          .pagination>.active>a,
          .pagination>.active>a:focus,
          .pagination>.active>a:hover,
          .pagination>.active>span,
          .pagination>.active>span:focus,
          .pagination>.active>span:hover {
            z-index: 3;
            color: #fff;
            cursor: default;
            background-color: #337ab7;
            border-color: #337ab7
          }

          .pagination>.disabled>a,
          .pagination>.disabled>a:focus,
          .pagination>.disabled>a:hover,
          .pagination>.disabled>span,
          .pagination>.disabled>span:focus,
          .pagination>.disabled>span:hover {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd
          }

          .pagination-lg>li>a,
          .pagination-lg>li>span {
            padding: 10px 16px;
            font-size: 18px;
            line-height: 18px;
            border-bottom-left-radius: 6px
          }

          .pagination-lg>li:last-child>a,
          .pagination-lg>li:last-child>span {
            border-?2???U ?2???U @/b?u??^U ?u??^U  {
              ??^U ?,
              ??^U ?u??^U ?u??^U @ ?u??^U 1.5
            }

            .pagination-sm>li:first-chil ��^U ��^U `0��^U ����^U ���^U @��^U @ @��^U `۰??U @ `۰??U @ @???U rder-top-right-radius:3px;
            border-bottom-right-radius:3px
          }

          .pager {
            padding-left: 0;
            marg04úøU 04úøU 0颺øU `úøU 4úøU P4úøU @ P4úøU inline-block;
            padding: 5px 14px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 15px
          }

          .pager li>a:focus,
          .pager li>a:hover {
            text-decoration: none;
            background-color: #eee
          }

          .pager .next>a,
          .pager .next>span {
            float: right
          }

          .pager .previous>a,
          .pager .previous>span {
            float: left
          }

          .pager .disabled>a,
          .pager .disabled>a:focus,
          .pager .disabled>a:hover,
          .pager .disabled>span {
            color: #777;
            cursor: not-allowed;
            background-color: #fff
          }

          .label {
            display: inline;
            padding: .2em .6em .3em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25em
          }

          a.label:focus,
          a.label:hover {
            color: #fff;
            text-decoration: none;
            cursor: pointer
          }

          .label:empty {
            display: none
          }

          .btn .label {
            position: relative;
            top: -1px
          }

          .label-default {
            background-color: #777
          }

          .label-default[href]:focus,
          .label-default[href]:hover {
            background-color: #5e5e5e
          }

          .label-primary {
            background-color: #337ab7
          }

          .label-primary[href]:focus,
          .label-primary[href]:hover {
            background-color: #286090
          }

          .label-success {
            background-color: #5cb85c
          }

          .label-success[href]:focus,
          .label-success[href]:hover {
            background-color: #449d44
          }

          .label-info {
            background-color: #5bc0de
          }

          .label-info[href]:focus,
          .label-info[href]:hover {
            background-color: #31b0d5
          }

          .label-warning {
            background-color: #f0ad4e
          }

          .label-warning[href]:focus,
          .label-warning[href]:hover {
            background-color: #ec971f
          }

          .label-danger {
            background-color: #d9534f
          }

          .label-danger[href]:focus,
          .label-danger[href]:hover {
            background-color: #c9302c
          }

          .badge {
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 12px;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            background-color: #777;
            border-radius: 10px
          }

          .badge:empty {
            display: none
          }

          .btn .badge {
            position: relative;
            top: -1px
          }

          .btn-group-xs>.btn .badge,
          .btn-xs .badge {
            top: 0;
            padding: 1px 5px
          }

          a.badge:focus,
          a.badge:hover {
            color: #fff;
            text-decoration: none;
            cursor: pointer
          }

          .list-group-item.active>.badge,
          .nav-pills>.active>a>.badge {
            color: #337ab7;
            background-color: #fff
          }

          .list-group-item>.badge {
            float: right
          }

          .list-group-item>.badge+.badge {
            margin-right: 5px
          }

          .nav-pills>li>a>.badge {
            margin-left: 3px
          }

          .jumbotron {
            padding-top: 30px;
            padding-bottom: 30px;
            margin-bottom: 30px;
            color: inherit;
            background-color: #eee
          }

          .jumbotron .h1,
          .jumbotron h1 {
            color: inherit
          }

          .jumbotron p {
            margin-bottom: 15px;
            font-size: 21px;
            font-weight: 200
          }

          .jumbotron>hr {
            border-top-color: #d5d5d5
          }

          .container .jumbotron,
          .container-fluid .jumbotron {
            padding-right: 15px;
            padding-left: 15px;
            border-radius: 6px
          }

          .jumbotron .container {
            max-width: 100%
          }

          @media screen and (min-width:768px) {
            .jumbotron {
              padding-top: 48px;
              padding-bottom: 48px
            }

            .container .jumbotron,
            .container-fluid .jumbotron {
              padding-right: 60px;
              padding-left: 60px
            }

            .jumbotron .h1,
            .jumbotron h1 {
              font-size: 63px
            }
          }

          .thumbnail {
            display: block;
            padding: 4px;
            margin-bottom: 20px;
            line-height: 1.42857143;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            -webkit-transition: border .2s ease-in-out;
            -o-transition: border .2s ease-in-out;
            transition: border .2s ease-in-out
          }

          .thumbnail a>img,
          .thumbnail>img {
            margin-right: auto;
            margin-left: auto
          }

          a.thumbnail.active,
          a.thumbnail:focus,
          a.thumbnail:hover {
            border-color: #337ab7
          }

          .thumbnail .caption {
            padding: 9px;
            color: #333
          }

          .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px
          }

          .alert h4 {
            margin-top: 0;
            color: inherit
          }

          .alert .alert-link {
            font-weight: 700
          }

          .alert>p,
          .alert>ul {
            margin-bottom: 0
          }

          .alert>p+p {
            margin-top: 5px
          }

          .alert-dismissable,
          .alert-dismissible {
            padding-right: 35px
          }

          .alert-dismissable .close,
          .alert-dismissible .close {
            position: relative;
            top: -2px;
            right: -21px;
            color: inherit
          }

          .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6
          }

          .alert-success hr {
            border-top-color: #c9e2b3
          }

          .alert-success .alert-link {
            color: #2b542c
          }

          .alert-info {
            color: #31708f;
            background-color: #d9edf7;
            border-color: #bce8f1
          }

          .alert-info hr {
            border-top-color: #a6e1ec
          }

          .alert-info .alert-link {
            color: #245269
          }

          .alert-warning {
            color: #8a6d3b;
            background-color: #fcf8e3;
            border-color: #faebcc
          }

          .alert-warning hr {
            border-top-color: #f7e1b5
          }

          .alert-warning .alert-link {
            color: #66512c
          }

          .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1
          }

          .alert-danger hr {
            border-top-color: #e4b9c0
          }

          .alert-danger .alert-link {
            color: #843534
          }

          @-webkit-keyframes progress-bar-stripes {
            from {
              background-position: 40px 0
            }

            to {
              background-position: 0 0
            }
          }

          @-o-keyframes progress-bar-stripes {
            from {
              background-position: 40px 0
            }

            to {
              background-position: 0 0
            }
          }

          @keyframes progress-bar-stripes {
            from {
              background-position: 40px 0
            }

            to {
              background-position: 0 0
            }
          }

          .progress {
            height: 20px;
            margin-bottom: 20px;
            overflow: hidden;
            background-color: #f5f5f5;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1)
          }

          .progress-bar {
            float: left;
            width: 0;
            height: 100%;
            font-size: 12px;
            line-height: 20px;
            color: #fff;
            text-align: center;
            background-color: #337ab7;
            -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
            -webkit-transition: width .6s ease;
            -o-transition: width .6s ease;
            transition: width .6s ease
          }

          .progress-bar-striped,
          .progress-striped .progress-bar {
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            -webkit-background-size: 40px 40px;
            background-size: 40px 40px
          }

          .progress-bar.active,
          .progress.active .progress-bar {
            -webkit-animation: progress-bar-stripes 2s linear infinite;
            -o-animation: progress-bar-stripes 2s linear infinite;
            animation: progress-bar-stripes 2s linear infinite
          }

          .progress-bar-success {
            background-color: #5cb85c
          }

          .progress-striped .progress-bar-success {
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
          }

          .progress-bar-info {
            background-color: #5bc0de
          }

          .progress-striped .progress-bar-info {
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
          }

          .progress-bar-warning {
            background-color: #f0ad4e
          }

          .progress-striped .progress-bar-warning {
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
          }

          .progress-bar-danger {
            background-color: #d9534f
          }

          .progress-striped .progress-bar-danger {
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
          }

          .media {
            margin-top: 15px
          }

          .media:first-child {
            margin-top: 0
          }

          .media,
          .media-body {
            overflow: hidden;
            zoom: 1
          }

          .media-body {
            width: 10000px
          }

          .media-object {
            display: block
          }

          .media-object.img-thumbnail {
            max-width: none
          }

          .media-right,
          .media>.pull-right {
            padding-left: 10px
          }

          .media-left,
          .media>.pull-left {
            padding-right: 10px
          }

          .media-body,
          .media-left,
          .media-right {
            display: table-cell;
            vertical-align: top
          }

          .media-middle {
            vertical-align: middle
          }

          .media-bottom {
            vertical-align: bottom
          }

          .media-heading {
            margin-top: 0;
            margin-bottom: 5px
          }

          .media-list {
            padding-left: 0;
            list-style: none
          }

          .list-group {
            padding-left: 0;
            margin-bottom: 20px
          }

          .list-group-item {
            position: relative;
            display: block;
            padding: 10px 15px;
            margin-bottom: -1px;
            background-color: #fff;
            border: 1px solid #ddd
          }

          .list-group-item:first-child {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px
          }

          .list-group-item:last-child {
            margin-bottom: 0;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px
          }

          a.list-group-item,
          button.list-group-item {
            color: #555
          }

          a.list-group-item .list-group-item-heading,
          button.list-group-item .list-group-item-heading {
            color: #333
          }

          a.list-group-item:focus,
          a.list-group-item:hover,
          button.list-group-item:focus,
          button.list-group-item:hover {
            color: #555;
            text-decoration: none;
            background-color: #f5f5f5
          }

          button.list-group-item {
            width: 100%;
            text-align: left
          }

          .list-group-item.disabled,
          .list-group-item.disabled:focus,
          .list-group-item.disabled:hover {
            color: #777;
            cursor: not-allowed;
            background-color: #eee
          }

          .list-group-item.disabled .list-group-item-heading,
          .list-group-item.disabled:focus .list-group-item-heading,
          .list-group-item.disabled:hover .list-group-item-heading {
            color: inherit
          }

          .list-group-item.disabled .list-group-item-text,
          .list-group-item.disabled:focus .list-group-item-text,
          .list-group-item.disabled:hover .list-group-item-text {
            color: #777
          }

          .list-group-item.active,
          .list-group-item.active:focus,
          .list-group-item.active:hover {
            z-index: 2;
            color: #fff;
            background-color: #337ab7;
            border-color: #337ab7
          }

          .list-group-item.active .list-group-item-heading,
          .list-group-item.active .list-group-item-heading>.small,
          .list-group-item.active .list-group-item-heading>small,
          .list-group-item.active:focus .list-group-item-heading,
          .list-group-item.active:focus .list-group-item-heading>.small,
          .list-group-item.active:focus .list-group-item-heading>small,
          .list-group-item.active:hover .list-group-item-heading,
          .list-group-item.active:hover .list-group-item-heading>.small,
          .list-group-item.active:hover .list-group-item-heading>small {
            color: inherit
          }

          .list-group-item.active .list-group-item-text,
          .list-group-item.active:focus .list-group-item-text,
          .list-group-item.active:hover .list-group-item-text {
            color: #c7ddef
          }

          .list-group-item-success {
            color: #3c763d;
            background-color: #dff0d8
          }

          a.list-group-item-success,
          button.list-group-item-success {
            color: #3c763d
          }

          a.list-group-item-success .list-group-item-heading,
          button.list-group-item-success .list-group-item-heading {
            color: inherit
          }

          a.list-group-item-success:focus,
          a.list-group-item-success:hover,
          button.list-group-item-success:focus,
          button.list-group-item-success:hover {
            color: #3c763d;
            background-color: #d0e9c6
          }

          a.list-group-item-success.active,
          a.list-group-item-success.active:focus,
          a.list-group-item-success.active:hover,
          button.list-group-item-success.active,
          button.list-group-item-success.active:focus,
          button.list-group-item-success.active:hover {
            color: #fff;
            background-color: #3c763d;
            border-color: #3c763d
          }

          .list-group-item-info {
            color: #31708f;
            background-color: #d9edf7
          }

          a.list-group-item-info,
          button.list-group-item-info {
            color: #31708f
          }

          a.list-group-item-info .list-group-item-heading,
          button.list-group-item-info .list-group-item-heading {
            color: inherit
          }

          a.list-group-item-info:focus,
          a.list-group-item-info:hover,
          button.list-group-item-info:focus,
          button.list-group-item-info:hover {
            color: #31708f;
            background-color: #c4e3f3
          }

          a.list-group-item-info.active,
          a.list-group-item-info.active:focus,
          a.list-group-item-info.active:hover,
          button.list-group-item-info.active,
          button.list-group-item-info.active:focus,
          button.list-group-item-info.active:hover {
            color: #fff;
            background-color: #31708f;
            border-color: #31708f
          }

          .list-group-item-warning {
            color: #8a6d3b;
            background-color: #fcf8e3
          }

          a.list-group-item-warning,
          button.list-group-item-warning {
            color: #8a6d3b
          }

          a.list-group-item-warning .list-group-item-heading,
          button.list-group-item-warning .list-group-item-heading {
            color: inherit
          }

          a.list-group-item-warning:focus,
          a.list-group-item-warning:hover,
          button.list-group-item-warning:focus,
          button.list-group-item-warning:hover {
            color: #8a6d3b;
            background-color: #faf2cc
          }

          a.list-group-item-warning.active,
          a.list-group-item-warning.active:focus,
          a.list-group-item-warning.active:hover,
          button.list-group-item-warning.active,
          button.list-group-item-warning.active:focus,
          button.list-group-item-warning.active:hover {
            color: #fff;
            background-color: #8a6d3b;
            border-color: #8a6d3b
          }

          .list-group-item-danger {
            color: #a94442;
            background-color: #f2dede
          }

          a.list-group-item-danger,
          button.list-group-item-danger {
            color: #a94442
          }

          a.list-group-item-danger .list-group-item-heading,
          button.list-group-item-danger .list-group-item-heading {
            color: inherit
          }

          a.list-group-item-danger:focus,
          a.list-group-item-danger:hover,
          button.list-group-item-danger:focus,
          button.list-group-item-danger:hover {
            color: #a94442;
            background-color: #ebcccc
          }

          a.list-group-item-danger.active,
          a.list-group-item-danger.active:focus,
          a.list-group-item-danger.active:hover,
          button.list-group-item-danger.active,
          button.list-group-item-danger.active:focus,
          button.list-group-item-danger.active:hover {
            color: #fff;
            background-color: #a94442;
            border-color: #a94442
          }

          .list-group-item-heading {
            margin-top: 0;
            margin-bottom: 5px
          }

          .list-group-item-text {
            margin-bottom: 0;
            line-height: 1.3
          }

          .panel {
            margin-bottom: 20px;
            background-color: #fff;
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
          }

          .panel-body {
            padding: 15px
          }

          .panel-heading {
            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px
          }

          .panel-heading>.dropdown .dropdown-toggle {
            color: inherit
          }

          .panel-title {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 16px;
            color: inherit
          }

          .panel-title>.small,
          .panel-title>.small>a,
          .panel-title>a,
          .panel-title>small,
          .panel-title>small>a {
            color: inherit
          }

          .panel-footer {
            padding: 10px 15px;
            background-color: #f5f5f5;
            border-top: 1px solid #ddd;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px
          }

          .panel>.list-group,
          .panel>.panel-collapse>.list-group {
            margi���?V ���?V `�?V p�?V X��?V ��?V @ ��?V r-width:1px 0;
            ????U ????U P~??U ?" ??U  ???U          ????U   @      ????U          -group:first-child .list-group-item:first-child{border-top:0;border-top-left-radius:3px;border-top-right-radius:3px}.panel>.list-group:last-child .list-group-item:last-child,.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child{border-bottom:0;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child{border-top-left-radius:0;border-top-right-radius:0}.panel-heading+.list-group .list-group-item:first-child{border-top-width:0}.list-group+.panel-footer{border-top-width:0}.panel>.panel-collapse>.table,.panel>.table,.panel>.table-responsive>.table{margin-bottom:0}.panel>.panel-collapse>.table caption,.panel>.table caption,.panel>.table-responsive>.table caption{padding-right:15px;padding-left:15px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,.panel>.table:fir?2?u??^U  ?u??^U                  {??^U          ?,??^U  ?u??^U          ?u??^U   @      ?u??^U          r-top-left-radius:3px;border-top-right-radius:3px}.panel>.table-re ��^U   ��^U                  `0��^U          ����^U  ���^U          @��^U   @      @��^U             `۰??U   @      `۰??U          @      @???U          tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>04úøU  04úøU                  0颺øU          `úøU  4úøU          P4úøU   @      P4úøU          tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child{border-top-left-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child{border-top-right-radius:3px}.panel>.table-responsive:last-child>.table:last-child,.panel>.table:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child{border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child{border-bottom-right-radius:3px}.panel>.panel-body+.table,.panel>.panel-body+.table-responsive,.panel>.table+.panel-body,.panel>.table-responsive+.panel-body{border-top:1px solid #ddd}.panel>.table>tbody:first-child>tr:first-child td,.panel>.table>tbody:first-child>tr:first-child th{border-top:0}.panel>.table-bordered,.panel>.table-responsive>.table-bordered{border:0}.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th{border-bottom:0}.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}.panel>.table-responsive{margin-bottom:0;border:0}.panel-group{margin-bottom:20px}.panel-group .panel{margin-bottom:0;border-radius:4px}.panel-group .panel+.panel{margin-top:5px}.panel-group .panel-heading{border-bottom:0}.panel-group .panel-heading+.panel-collapse>.list-group,.panel-group .panel-heading+.panel-collapse>.panel-body{border-top:1px solid #ddd}.panel-group .panel-footer{border-top:0}.panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}.panel-default{border-color:#ddd}.panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd}.panel-default>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ddd}.panel-default>.panel-heading .badge{color:#f5f5f5;background-color:#333}.panel-default>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ddd}.panel-primary{border-color:#337ab7}.panel-primary>.panel-heading{color:#fff;background-color:#337ab7;border-color:#337ab7}.panel-primary>.panel-heading+.panel-collapse>.panel-body{border-top-color:#337ab7}.panel-primary>.panel-heading .badge{color:#337ab7;background-color:#fff}.panel-primary>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#337ab7}.panel-success{border-color:#d6e9c6}.panel-success>.panel-heading{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.panel-success>.panel-heading+.panel-collapse>.panel-body{border-top-color:#d6e9c6}.panel-success>.panel-heading .badge{color:#dff0d8;background-color:#3c763d}.panel-success>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#d6e9c6}.panel-info{border-color:#bce8f1}.panel-info>.panel-heading{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.panel-info>.panel-heading+.panel-collapse>.panel-body{border-top-color:#bce8f1}.panel-info>.panel-heading .badge{color:#d9edf7;background-color:#31708f}.panel-info>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#bce8f1}.panel-warning{border-color:#faebcc}.panel-warning>.panel-heading{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.panel-warning>.panel-heading+.panel-collapse>.panel-body{border-top-color:#faebcc}.panel-warning>.panel-heading .badge{color:#fcf8e3;background-color:#8a6d3b}.panel-warning>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#faebcc}.panel-danger{border-color:#ebccd1}.panel-danger>.panel-heading{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.panel-danger>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ebccd1}.panel-danger>.panel-heading .badge{color:#f2dede;background-color:#a94442}.panel-danger>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ebccd1}.embed-responsive{position:relative;display:block;height:0;padding:0;overflow:hidden}.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive-16by9{padding-bottom:56.25%}.embed-responsive-4by3{padding-bottom:75%}.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.05);box-shadow:inset 0 1px 1px rgba(0,0,0,.05)}.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,.15)}.well-lg{padding:24px;border-radius:6px}.well-sm{padding:9px;border-radius:3px}.close{float:right;font-size:21px;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;filter:alpha(opacity=20);opacity:.2}.close:focus,.close:hover{color:#000;text-decoration:none;cursor:pointer;filter:alpha(opacity=50);opacity:.5}button.close{-webkit-appearance:none;padding:0;cursor:pointer;background:0 0;border:0}.modal-open{overflow:hidden}.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;overflow:hidden;-webkit-overflow-scrolling:touch;outline:0}.modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out;-webkit-transform:translate(0,-25%);-ms-transform:translate(0,-25%);-o-transform:translate(0,-25%);transform:translate(0,-25%)}.modal.in .modal-dialog{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);-o-transform:translate(0,0);transform:translate(0,0)}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal-dialog{position:relative;width:auto;margin:10px}.modal-content{position:relative;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #999;border:1px solid rgba(0,0,0,.2);border-radius:6px;outline:0;-webkit-box-shadow:0 3px 9px rgba(0,0,0,.5);box-shadow:0 3px 9px rgba(0,0,0,.5)}.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000}.modal-backdrop.fade{filter:alpha(opacity=0);opacity:0}.modal-backdrop.in{filter:alpha(opacity=50);opacity:.5}.modal-header{padding:15px;border-bottom:1px solid #e5e5e5}.modal-header .close{margin-top:-2px}.modal-title{margin:0;line-height:1.42857143}.modal-body{position:relative;padding:15px}.modal-footer{padding:15px;text-align:right;border-top:1px solid #e5e5e5}.modal-footer .btn+.btn{margin-bottom:0;margin-left:5px}.modal-footer .btn-group .btn+.btn{margin-left:-1px}.modal-footer .btn-block+.btn-block{margin-left:0}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:768px){.modal-dialog{width:600px;margin:30px auto}.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5)}.modal-sm{width:300px}}@media (min-width:992px){.modal-lg{width:900px}}.tooltip{position:absolute;z-index:1070;display:block;font-family:" Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;font-style:normal;font-weight:400;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;word-wrap:normal;white-space:normal;filter:alpha(opacity=0);opacity:0;line-break:auto}.tooltip.in{filter:alpha(opacity=90);opacity:.9}.tooltip.top{padding:5px 0;margin-top:-3px}.tooltip.right{padding:0 5px;margin-left:3px}.tooltip.bottom{padding:5px 0;margin-top:3px}.tooltip.left{padding:0 5px;margin-left:-3px}.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:center;background-color:#000;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-left .tooltip-arrow{right:5px;bottom:0;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-right .tooltip-arrow{bottom:0;left:5px;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000}.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000}.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-left .tooltip-arrow{top:0;right:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-right .tooltip-arrow{top:0;left:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.popover{position:absolute;top:0;left:0;z-index:1060;display:none;max-width:276px;padding:1px;font-family:" Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-style:normal;font-weight:400;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;word-wrap:normal;white-space:normal;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.2);border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,.2);box-shadow:0 5px 10px rgba(0,0,0,.2);line-break:auto}.popover.top{margin-top:-10px}.popover.right{margin-left:10px}.popover.bottom{margin-top:10px}.popover.left{margin-left:-10px}.popover-title{padding:8px 14px;margin:0;font-size:14px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-radius:5px 5px 0 0}.popover-content{padding:9px 14px}.popover>.arrow,.popover>.arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid}.popover>.arrow{border-width:11px}.popover>.arrow:after{content:" ";border-width:10px}.popover.top>.arrow{bottom:-11px;left:50%;margin-left:-11px;border-top-color:#999;border-top-color:rgba(0,0,0,.25);border-bottom-width:0}.popover.top>.arrow:after{bottom:1px;margin-left:-10px;content:" ";border-top-color:#fff;border-bottom-width:0}.popover.right>.arrow{top:50%;left:-11px;margin-top:-11px;border-right-color:#999;border-right-color:rgba(0,0,0,.25);border-left-width:0}.popover.right>.arrow:after{bottom:-10px;left:1px;content:" ";border-right-color:#fff;border-left-width:0}.popover.bottom>.arrow{top:-11px;left:50%;margin-left:-11px;border-top-width:0;border-bottom-color:#999;border-bottom-color:rgba(0,0,0,.25)}.popover.bottom>.arrow:after{top:1px;margin-left:-10px;content:" ";border-top-width:0;border-bottom-color:#fff}.popover.left>.arrow{top:50%;right:-11px;margin-top:-11px;border-right-width:0;border-left-color:#999;border-left-color:rgba(0,0,0,.25)}.popover.left>.arrow:after{right:1px;bottom:-10px;content:" ";border-right-width:0;border-left-color:#fff}.carousel{position:relative}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner>.item{position:relative;display:none;-webkit-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left}.carousel-inner>.item>a>img,.carousel-inner>.item>img{line-height:1}@media all and (transform-3d),(-webkit-transform-3d){.carousel-inner>.item{-webkit-transition:-webkit-transform .6s ease-in-out;-o-transition:-o-transform .6s ease-in-out;transition:transform .6s ease-in-out;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000px;perspective:1000px}.carousel-inner>.item.active.right,.carousel-inner>.item.next{left:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}.carousel-inner>.item.active.left,.carousel-inner>.item.prev{left:0;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}.carousel-inner>.item.active,.carousel-inner>.item.next.left,.carousel-inner>.item.prev.right{left:0;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}.carousel-inner>.active{left:0}.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.next{left:100%}.carousel-inner>.prev{left:-100%}.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-inner>.active.left{left:-100%}.carousel-inner>.active.right{left:100%}.carousel-control{position:absolute;top:0;bottom:0;left:0;width:15%;font-size:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6);background-color:rgba(0,0,0,0);filter:alpha(opacity=50);opacity:.5}.carousel-control.left{background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,.0001)));background-image:linear-gradient(to right,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);background-repeat:repeat-x}.carousel-control.right{right:0;left:auto;background-image:-webkit-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.0001)),to(rgba(0,0,0,.5)));background-image:linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);background-repeat:repeat-x}.carousel-control:focus,.carousel-control:hover{color:#fff;text-decoration:none;filter:alpha(opacity=90);outline:0;opacity:.9}.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{position:absolute;top:50%;z-index:5;display:inline-block;margin-top:-10px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{left:50%;margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{right:50%;margin-right:-10px}.carousel-control .icon-next,.carousel-control .icon-prev{width:20px;height:20px;font-family:serif;line-height:1}.carousel-control .icon-prev:before{content:'\2039'}.carousel-control .icon-next:before{content:'\203a'}.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;padding-left:0;margin-left:-30%;text-align:center;list-style:none}.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;cursor:pointer;background-color:#000\9;background-color:rgba(0,0,0,0);border:1px solid #fff;border-radius:10px}.carousel-indicators .active{width:12px;height:12px;margin:0;background-color:#fff}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6)}.carousel-caption .btn{text-shadow:none}@media screen and (min-width:768px){.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{width:30px;height:30px;margin-top:-10px;font-size:30px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{margin-right:-10px}.carousel-caption{right:20%;left:20%;padding-bottom:30px}.carousel-indicators{bottom:20px}}.btn-group-vertical>.btn-group:after,.btn-group-vertical>.btn-group:before,.btn-toolbar:after,.btn-toolbar:before,.clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.dl-horizontal dd:after,.dl-horizontal dd:before,.form-horizontal .form-group:after,.form-horizontal .form-group:before,.modal-footer:after,.modal-footer:before,.modal-header:after,.modal-header:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.pager:after,.pager:before,.panel-body:after,.panel-body:before,.row:after,.row:before{display:table;content:" "}.btn-group-vertical>.btn-group:after,.btn-toolbar:after,.clearfix:after,.container-fluid:after,.container:after,.dl-horizontal dd:after,.form-horizontal .form-group:after,.modal-footer:after,.modal-header:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.pager:after,.panel-body:after,.row:after{clear:both}.center-block{display:block;margin-right:auto;margin-left:auto}.pull-right{float:right!important}.pull-left{float:left!important}.hide{display:none!important}.show{display:block!important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none!important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-lg,.visible-md,.visible-sm,.visible-xs{display:none!important}.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block{display:none!important}@media (max-width:767px){.visible-xs{display:block!important}table.visible-xs{display:table!important}tr.visible-xs{display:table-row!important}td.visible-xs,th.visible-xs{display:table-cell!important}}@media (max-width:767px){.visible-xs-block{display:block!important}}@media (max-width:767px){.visible-xs-inline{display:inline!important}}@media (max-width:767px){.visible-xs-inline-block{display:inline-block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block!important}table.visible-sm{display:table!important}tr.visible-sm{display:table-row!important}td.visible-sm,th.visible-sm{display:table-cell!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-block{display:block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block!important}table.visible-md{display:table!important}tr.visible-md{display:table-row!important}td.visible-md,th.visible-md{display:table-cell!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-block{display:block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block!important}}@media (min-width:1200px){.visible-lg{display:block!important}table.visible-lg{display:table!important}tr.visible-lg{display:table-row!important}td.visible-lg,th.visible-lg{display:table-cell!important}}@media (min-width:1200px){.visible-lg-block{display:block!important}}@media (min-width:1200px){.visible-lg-inline{display:inline!important}}@media (min-width:1200px){.visible-lg-inline-block{display:inline-block!important}}@media (max-width:767px){.hidden-xs{display:none!important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none!important}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none!important}}@media (min-width:1200px){.hidden-lg{display:none!important}}.visible-print{display:none!important}@media print{.visible-print{display:block!important}table.visible-print{display:table!important}tr.visible-print{display:table-row!important}td.visible-print,th.visible-print{display:table-cell!important}}.visible-print-block{display:none!important}@media print{.visible-print-block{display:block!important}}.visible-print-inline{display:none!important}@media print{.visible-print-inline{display:inline!important}}.visible-print-inline-block{display:none!important}@media print{.visible-print-inline-block{display:inline-block!important}}@media print{.hidden-print{display:none!important}}
</style>
<style>

  .body {
    font-family: sans-serif;
    font-size: 15px;
    line-height: 1.6;
    color: #222;
    font-weight: 400;
  }

  .open-sans body {
    font-family: 'Open Sans', sans-serif;
  }

  .site-map-box-menu-user-menu h2 {
    display: none;
  }

  #block-block-45 ._html-code h2 {
    color: #fff;
    text-transform: uppercase;
    font-size: 32px;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    text-align: center;
    margin: 15px
  }

  #block-block-45 ._field-wrapper input[type=text] {
    background: #525160;
    border: none;
    box-shadow: none;
    border-radius: 0;
    color: #fff !important;
    padding: 8px;
    font-size: 15px
  }

  #block-block-45 ._field-wrapper input[type=text]::placeholder {
    color: #fff;
    opacity: 1
  }

  #block-block-45 ._field-wrapper input[type=text]:-ms-input-placeholder {
    color: #fff
  }

  #block-block-45 ._field-wrapper input[type=text]::-ms-input-placeholder {
    color: #fff
  }

  #block-block-45 ._form-content ._form-label {
    display: none !important
  }

  #block-block-45 ._form-branding {
    display: none
  }

  #block-block-45 ._button-wrapper._full_width {
    padding-bottom: 15px
  }

  #block-block-45 ._button-wrapper._full_width ._submit {
    text-align: center;
    background: #00c2e5 !important;
    font-size: 15px;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    text-transform: uppercase;
    padding: 10px 15px !important
  }

  a {
    color: #34c2f1;
    transition: all .3s ease-in-out;
    text-decoration: none
  }

  a:hover {
    color: #37cea6;
    text-decoration: none
  }

  img {
    max-width: 100%;
    height: auto
  }

  .node-infographics .field-name-field-image {
    text-align: center
  }

  .node-infographics .field-name-field-image img {
    display: inline-block
  }

  .lazyloader-icon {
    width: 20px !important;
    height: auto
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  .h1,
  .h2,
  .h3,
  .h4,
  .h5,
  .h6 {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    line-height: 1.2;
    color: #3e3d4e;
    padding: 0
  }

  .navbar-header.custom-header {
    background: #fff;
    padding: 5px 0;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    z-index: 999;
    border-top: 1px solid rgba(0, 0, 0, .1)
  }

  .front .page-title .page-header {
    margin-bottom: 30px
  }

  .link-button {
    text-align: center;
    overflow: hidden;
    margin-bottom: 30px
  }

  .link-button ul {
    margin: 0;
    padding: 0
  }

  .link-button ul li {
    list-style: none;
    display: inline-block;
    margin: 2px 15px;
    text-align: center;
    width: 200px
  }

  .link-button ul li a {
    display: block;
    padding: 10px 20px;
    border-radius: 50px;
    background: 0 0;
    color: #fff;
    font-size: 14px;
    text-transform: uppercase;
    text-decoration: none;
    border: 2px solid #fff;
    font-weight: 800;
    font-family: 'Poppins', sans-serif
  }

  .link-button ul li.get-quote a {
    background: #f19830;
    color: #fff;
    border: 2px solid #fff
  }

  .link-button ul li a:hover {
    background: #f19830;
    color: #fff;
    border: 2px solid #f19830
  }

  .link-button ul li.get-quote a:hover {
    background: 0 0;
    color: #fff;
    border: 2px solid #fff
  }

  .budgetques {
    color: #34c2f1;
    font-size: 14px;
    cursor: pointer
  }

  .budgetans {
    display: none;
    background: #fff;
    color: #000;
    padding: 15px;
    font-size: 14px;
    margin: 15px 0
  }

  @media (max-width:767px) {
    .link-button ul li {
      list-style: none;
      display: inline-block;
      margin: 2px;
      text-align: center;
      width: auto
    }

    .link-button ul li a {
      display: block;
      padding: 10px 15px;
      border-radius: 50px;
      background: 0 0;
      color: #fff;
      font-size: 13px;
      text-transform: uppercase;
      text-decoration: none;
      border: 2px solid #fff;
      font-family: 'Poppins', sans-serif;
      font-weight: 800;
      width: 155px
    }
  }

  .call-email {
    padding-top: 11px
  }

  .ch-logo,
  .call-email,
  .ch-menu {
    display: block;
    width: 33.3%;
    float: left;
    text-align: center;
    vertical-align: middle;
  }

  .navbar {
    width: 100%;
    padding-top: 60px;
    border-radius: 0;
    border: none
  }

  .navbar .logo {
    padding: 0;
    display: inline-block;
    text-align: center;
    margin: 0;
    width: 100%
  }

  .navbar-default {
    background-color: transparent;
    border: none
  }

  .top-services {
    text-align: center;
    background: #fff;
    padding: 20px 15px;
    margin-bottom: 30px
  }

  .shortdesc {
    display: block;
    min-height: 225px
  }

  .top-services img {
    display: inline-block
  }

  .top-services h4 {
    color: #343333;
    font-size: 23px;
    text-transform: capitalize;
    margin-bottom: 15px;
    font-weight: 300;
    font-family: 'Poppins', sans-serif;
    min-height: 55px
  }

  .top-services h4 strong {
    font-family: 'Poppins', sans-serif;
    font-weight: 800
  }

  .front .content-top.content-top-up {
    padding-bottom: 0
  }

  .content-top {
    padding-bottom: 0px;
    position: relative;
    clear: both;
    overflow: hidden
  }

  .content-bottom {
    background: url(img/BG_Light.png) bottom center repeat-x;
    padding-bottom: 135px;
    position: relative;
    clear: both;
    overflow: hidden
  }

  .page-node-138 .alert-success {
    display: none !important
  }

  .content-top .container {
    position: relative
  }

  .viewmorelink a {
    display: inline-block;
    padding: 10px 30px;
    font-weight: 400;
    border-radius: 50px;
    background: #00c2e5;
    color: #fff;
    font-size: 12px;
    text-transform: uppercase;
    text-decoration: none
  }

  .viewmorelink a:hover {
    color: #fff;
    background: #222
  }

  .node-press-release .field-name-field-image img {
    margin-bottom: 20px
  }

  .view-press-release .hp-blogs {
    text-align: center
  }

  .video-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px;
    height: 0;
    overflow: hidden
  }

  .video-container iframe,
  .video-container object,
  .video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%
  }

  .page-node-205 .field-name-field-full-width-top,
  .page-node-206 .field-name-field-full-width-top {
    padding-top: 135px;
    background: url(img/blog-icon.png);
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: no-repeat;
    background-position: center 0;
    padding-bottom: 40px;
    clear: both;
    overflow: hidden;
    margin: 0 auto;
    max-width: 100%;
    padding-left: 15px;
    padding-right: 15px
  }

  @media (min-width:768px) {

    .page-node-205 .field-name-body img,
    .page-node-206 .field-name-body img {
      float: right;
      margin-left: 25px;
      max-width: 50%
    }

    .page-node-205 .field-name-field-full-width-top,
    .page-node-206 .field-name-field-full-width-top {
      max-width: 80%
    }
  }

  @media (min-width:1200px) {
    .container {
      width: 100%;
      max-width: 1246px
    }
  }

  @media (min-width:767px) {
    .node-press-release .field-name-field-image img {
      float: right;
      margin-left: 30px;
      max-width: 450px
    }
  }

  .page-title .page-header {
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    color: #525050;
    font-size: 62px;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0, 0, 0, .5);
    border: none;
    margin: 65px auto 40px auto
  }

  .not-front .page-title {
    clear: both;
    overflow: hidden;
    background: url(img/innertitlebg.jpg);
    background-repeat: repeat;
    background-size: auto auto;
    background-repeat: no-repeat;
    background-size: cover
  }

  .not-front .page-title .page-header {
    margin: 30px auto 0 auto;
    text-transform: uppercase;
    padding: 0
  }

  .breadcrumb {
    padding: 0;
    margin-bottom: 30px;
    list-style: none;
    background-color: transparent;
    border-radius: unset;
    text-align: center;
    color: #fff;
    font-size: 25px
  }

  .breadcrumb>li {
    display: inline-block;
    color: #fff
  }

  .breadcrumb>li+li:before {
    padding: 0 5px;
    color: #fff;
    content: "/\00a0"
  }

  .breadcrumb>.active {
    color: #fff
  }

  .breadcrumb>li a {
    color: #fff
  }

  .not-front .navbar {
    width: 100%;
    padding-top: 35px;
    border-radius: 0;
    border: none;
    margin-bottom: 35px
  }

  .free-consultation h2 {
    text-align: center;
    font-weight: 800;
    font-size: 43px;
    line-height: 1.5;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    color: #3e3d4e
  }

  .text-200 {
    display: block;
    text-align: center;
    font-weight: 200;
    font-family: 'Poppins', sans-serif;
  }

  .text-500 {
    display: block;
    text-align: center;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
  }

  .free-consultation a.button {
    background: #37cea6;
    color: #fff;
    display: block;
    text-align: center;
    font-size: 39px;
    font-weight: 800;
    text-shadow: 0 1px 2px rgba(0, 0, 0, .5);
    max-width: 365px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
  }

  #block-block-2 {
    background: url(img/middle-hang-bg.png) top center no-repeat;
    text-align: center;
    padding-top: 215px;
    font-size: 18px;
    font-weight: 300;
    margin-bottom: 70px
  }

  .mobile-tablet-friendly h2 {
    font-weight: 100;
    font-size: 83px;
    line-height: 1;
    margin-bottom: 50px;
    color: #3e3d4e;
    font-family: 'Poppins', sans-serif;
    font-weight: 100;
  }

  .mobile-tablet-friendly h2 strong {
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    display: block
  }

  #block-block-6 p {
    margin-top: 1%
  }

  .emailinfo {
    border-bottom: 2px solid #000;
    float: left
  }

  .footer-bottom .block-block p {
    font-size: 17px;
    font-weight: 300;
    color: #3e3d4e;
    line-height: 32px;
    margin: 0
  }


  .footer-bottom .block-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    font-size:24px;
    position: relative
  }

  .footer-bottom .block-title:after {
    content: '';

    position: absolute;
    width: 130px;
    top: 15px;
    margin-left: 15px
  }


  #block-block-8 ul {
    margin: 0;
    padding: 0;
    float: left;
    width: 50%
  }

  #block-block-8 ul li {
    list-style: none;
    background: url(img/lining.png) left no-repeat;
    padding-left: 10px;
    line-height: 32px
  }

  #block-block-8 ul li a {
    display: block;
    color: #3e3d4e;
    font-size: 17px;
    font-weight: 300
  }

  #block-block-9 ul {
    margin: 0;
    padding: 0
  }

  #block-block-9 ul li {
    list-style: none;
    position: relative
  }

  #block-block-9 ul li a:before {
    content: "";
    border-bottom: 1px solid #222;
    position: absolute;
    width: 20px;
    top: 27px;
    left: 47px
  }

  #block-block-9 ul li a {
    padding: 12px 10px 12px 75px;
    display: block;
    color: #3e3d4e;
    font-size: 17px;
    font-weight: 300
  }

  #block-block-9 ul li.facebook-link a {
    background: url(img/facebook-icon.png) left no-repeat
  }
  #block-block-9 ul li.facebook-link a :hover
  {
    background-color: #069; 
  }

  #block-block-9 ul li.twitter-link a {
    background: url(img/twitter-icon.png) left no-repeat
  }

  #block-block-9 ul li.linkedin-link a {
    background: url(img/linked-in.png) left no-repeat
  }

  #block-block-9 ul li.Instagram-link a {
    background: url(img/if_Instagram_1298747.png) left no-repeat;
    background-size: 38px;
  }

  #block-block-9 ul li.google-link a {
    background: url(img/google_plus.png) left no-repeat;
    background-size: 37px;
  }

  #block-block-9 ul li.pinterest-link a {
    background: url(img/pinterest.png) left no-repeat;
    background-size: auto;
    background-size: 38px;
  }

  #block-block-9 ul li.youtube-link a {
    background: url(img/youtube.png) left no-repeat;
    background-size: 37px;
  }

  .footer-bottom {
  
    padding-top: 6%;
    background-color: #dd7c78;
    border-radius: 30px;
  }

  .footer_bottom {
    margin: 50px;
  }

  ul.tc-menu {
    margin: 0;
    padding: 0 0 75px 0px;
  }

  ul.tc-menu li {
    margin-right: 0;
    padding: 0;
    list-style: none;
    float: left;
  }

  ul.tc-menu li a {
    padding: 0;
    color: #3e3d4e;
    font-size: 12px;
    text-transform: uppercase;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    border-bottom: 2px solid #3e3d4e
  }

  .navbar-header .navbar-toggle {
    float: right;
    margin-bottom: 4px;
    margin-right: 0;
    margin-top: 14px;
    padding: 8px 10px;
    position: relative;
    color: #fff;
    font-size: 16px;
    cursor: pointer
  }

  .hamburger {
    background-color: transparent;
    border: 0 none;
    color: inherit;
    cursor: pointer;
    display: inline-block;
    font: inherit;
    margin: 0;
    overflow: visible;
    text-transform: none;
    transition-duration: .15s;
    transition-property: opacity, filter, -webkit-filter;
    transition-timing-function: linear
  }

  .hamburger:hover {
    opacity: .7
  }

  .hamburger-box {
    display: inline-block;
    height: 18px;
    position: relative;
    width: 40px
  }

  .hamburger-inner {
    display: block;
    margin-top: -2px;
    top: 50%
  }

  .hamburger-inner,
  .hamburger-inner:after,
  .hamburger-inner:before {
    background-color: #000;
    border-radius: 0;
    height: 2px;
    position: absolute;
    transition-duration: .15s;
    transition-property: transform, -webkit-transform;
    transition-timing-function: ease;
    width: 32px
  }

  .hamburger-inner:after,
  .hamburger-inner:before {
    content: "";
    display: block
  }

  .hamburger-inner:before {
    top: -10px
  }

  .hamburger-inner:after {
    bottom: -10px
  }

  .hamburger--3dx .hamburger-box {
    perspective: 80px
  }

  .hamburger--3dx .hamburger-inner {
    transition: transform .2s cubic-bezier(.645, .045, .355, 1) 0s, background-color 0s cubic-bezier(.645, .045, .355, 1) .1s, -webkit-transform .2s cubic-bezier(.645, .045, .355, 1) 0s
  }

  .hamburger--3dx .hamburger-inner:after,
  .hamburger--3dx .hamburger-inner:before {
    transition: transform 0s cubic-bezier(.645, .045, .355, 1) .1s, -webkit-transform 0s cubic-bezier(.645, .045, .355, 1) .1s
  }

  .hamburger--3dx.is-active .hamburger-inner {
    background-color: transparent;
    transform: rotateY(180deg)
  }

  .hamburger--3dx.is-active .hamburger-inner:before {
    transform: translate3d(0px, 10px, 0px) rotate(45deg)
  }

  .hamburger--3dx.is-active .hamburger-inner:after {
    transform: translate3d(0px, -10px, 0px) rotate(-45deg)
  }

  .hamburger--3dx-r .hamburger-box {
    perspective: 80px
  }

  .hamburger--3dx-r .hamburger-inner {
    transition: transform .2s cubic-bezier(.645, .045, .355, 1) 0s, background-color 0s cubic-bezier(.645, .045, .355, 1) .1s, -webkit-transform .2s cubic-bezier(.645, .045, .355, 1) 0s
  }

  .hamburger--3dx-r .hamburger-inner:after,
  .hamburger--3dx-r .hamburger-inner:before {
    transition: transform 0s cubic-bezier(.645, .045, .355, 1) .1s, -webkit-transform 0s cubic-bezier(.645, .045, .355, 1) .1s
  }

  .hamburger--3dx-r.is-active .hamburger-inner {
    background-color: transparent;
    transform: rotateY(-180deg)
  }

  .hamburger--3dx-r.is-active .hamburger-inner:before {
    transform: translate3d(0px, 10px, 0px) rotate(45deg)
  }

  .hamburger--3dx-r.is-active .hamburger-inner:after {
    transform: translate3d(0px, -10px, 0px) rotate(-45deg)
  }

  .hamburger--3dy .hamburger-box {
    perspective: 80px
  }

  .hamburger--3dy .hamburger-inner {
    transition: transform .2s cubic-bezier(.645, .045, .355, 1) 0s, background-color 0s cubic-bezier(.645, .045, .355, 1) .1s, -webkit-transform .2s cubic-bezier(.645, .045, .355, 1) 0s
  }

  .hamburger--3dy .hamburger-inner:after,
  .hamburger--3dy .hamburger-inner:before {
    transition: transform 0s cubic-bezier(.645, .045, .355, 1) .1s, -webkit-transform 0s cubic-bezier(.645, .045, .355, 1) .1s
  }

  .hamburger--3dy.is-active .hamburger-inner {
    background-color: transparent;
    transform: rotateX(-180deg)
  }

  .hamburger--3dy.is-active .hamburger-inner:before {
    transform: translate3d(0px, 10px, 0px) rotate(45deg)
  }

  .hamburger--3dy.is-active .hamburger-inner:after {
    transform: translate3d(0px, -10px, 0px) rotate(-45deg)
  }

  .hamburger--3dy-r .hamburger-box {
    perspective: 80px
  }

  .hamburger--3dy-r .hamburger-inner {
    transition: transform .2s cubic-bezier(.645, .045, .355, 1) 0s, background-color 0s cubic-bezier(.645, .045, .355, 1) .1s, -webkit-transform .2s cubic-bezier(.645, .045, .355, 1) 0s
  }

  .hamburger--3dy-r .hamburger-inner:after,
  .hamburger--3dy-r .hamburger-inner:before {
    transition: transform 0s cubic-bezier(.645, .045, .355, 1) .1s, -webkit-transform 0s cubic-bezier(.645, .045, .355, 1) .1s
  }

  .hamburger--3dy-r.is-active .hamburger-inner {
    background-color: transparent;
    transform: rotateX(180deg)
  }

  .hamburger--3dy-r.is-active .hamburger-inner:before {
    transform: translate3d(0px, 10px, 0px) rotate(45deg)
  }

  .hamburger--3dy-r.is-active .hamburger-inner:after {
    transform: translate3d(0px, -10px, 0px) rotate(-45deg)
  }

  .hamburger--arrow.is-active .hamburger-inner:before {
    transform: translate3d(-8px, 0px, 0px) rotate(-45deg) scaleX(.7)
  }

  .hamburger--arrow.is-active .hamburger-inner:after {
    transform: translate3d(-8px, 0px, 0px) rotate(45deg) scaleX(.7)
  }

  .hamburger--arrow-r.is-active .hamburger-inner:before {
    transform: translate3d(8px, 0px, 0px) rotate(45deg) scaleX(.7)
  }

  .hamburger--arrow-r.is-active .hamburger-inner:after {
    transform: translate3d(8px, 0px, 0px) rotate(-45deg) scaleX(.7)
  }

  .hamburger--arrowalt .hamburger-inner:before {
    transition: top .1s ease .15s, transform .15s cubic-bezier(.165, .84, .44, 1) 0s, -webkit-transform .15s cubic-bezier(.165, .84, .44, 1) 0s
  }

  .hamburger--arrowalt .hamburger-inner:after {
    transition: bottom .1s ease .15s, transform .15s cubic-bezier(.165, .84, .44, 1) 0s, -webkit-transform .15s cubic-bezier(.165, .84, .44, 1) 0s
  }

  .hamburger--arrowalt.is-active .hamburger-inner:before {
    top: 0;
    transform: translate3d(-8px, -10px, 0px) rotate(-45deg) scaleX(.7);
    transition: top .1s ease 0s, transform .15s cubic-bezier(.895, .03, .685, .22) .1s, -webkit-transform .15s cubic-bezier(.895, .03, .685, .22) .1s
  }

  .hamburger--arrowalt.is-active .hamburger-inner:after {
    bottom: 0;
    transform: translate3d(-8px, 10px, 0px) rotate(45deg) scaleX(.7);
    transition: bottom .1s ease 0s, transform .15s cubic-bezier(.895, .03, .685, .22) .1s, -webkit-transform .15s cubic-bezier(.895, .03, .685, .22) .1s
  }

  .hamburger--arrowalt-r .hamburger-inner:before {
    transition: top .1s ease .15s, transform .15s cubic-bezier(.165, .84, .44, 1) 0s, -webkit-transform .15s cubic-bezier(.165, .84, .44, 1) 0s
  }

  .hamburger--arrowalt-r .hamburger-inner:after {
    transition: bottom .1s ease .15s, transform .15s cubic-bezier(.165, .84, .44, 1) 0s, -webkit-transform .15s cubic-bezier(.165, .84, .44, 1) 0s
  }

  .hamburger--arrowalt-r.is-active .hamburger-inner:before {
    top: 0;
    transform: translate3d(8px, -10px, 0px) rotate(45deg) scaleX(.7);
    transition: top .1s ease 0s, transform .15s cubic-bezier(.895, .03, .685, .22) .1s, -webkit-transform .15s cubic-bezier(.895, .03, .685, .22) .1s
  }

  .hamburger--arrowalt-r.is-active .hamburger-inner:after {
    bottom: 0;
    transform: translate3d(8px, 10px, 0px) rotate(-45deg) scaleX(.7);
    transition: bottom .1s ease 0s, transform .15s cubic-bezier(.895, .03, .685, .22) .1s, -webkit-transform .15s cubic-bezier(.895, .03, .685, .22) .1s
  }

  .hamburger--boring .hamburger-inner,
  .hamburger--boring .hamburger-inner:after,
  .hamburger--boring .hamburger-inner:before {
    transition-property: none
  }

  .hamburger--boring.is-active .hamburger-inner {
    transform: rotate(45deg)
  }

  .hamburger--boring.is-active .hamburger-inner:before {
    opacity: 0;
    top: 0
  }

  .hamburger--boring.is-active .hamburger-inner:after {
    bottom: 0;
    transform: rotate(-90deg)
  }

  .hamburger--collapse .hamburger-inner {
    bottom: 0;
    top: auto;
    transition-delay: .15s;
    transition-duration: .15s;
    transition-timing-function: cubic-bezier(.55, .055, .675, .19)
  }

  .hamburger--collapse .hamburger-inner:after {
    top: -20px;
    transition: top .3s cubic-bezier(.33333, .66667, .66667, 1) .3s, opacity .1s linear 0s
  }

  .hamburger--collapse .hamburger-inner:before {
    transition: top .12s cubic-bezier(.33333, .66667, .66667, 1) .3s, transform .15s cubic-bezier(.55, .055, .675, .19) 0s, -webkit-transform .15s cubic-bezier(.55, .055, .675, .19) 0s
  }

  .hamburger--collapse.is-active .hamburger-inner {
    transform: translate3d(0px, -10px, 0px) rotate(-45deg);
    transition-delay: .32s;
    transition-timing-function: cubic-bezier(.215, .61, .355, 1)
  }

  .hamburger--collapse.is-active .hamburger-inner:after {
    opacity: 0;
    top: 0;
    transition: top .3s cubic-bezier(.33333, 0, .66667, .33333) 0s, opacity .1s linear .27s
  }

  .hamburger--collapse.is-active .hamburger-inner:before {
    top: 0;
    transform: rotate(-90deg);
    transition: top .12s cubic-bezier(.33333, 0, .66667, .33333) .18s, transform .15s cubic-bezier(.215, .61, .355, 1) .42s, -webkit-transform .15s cubic-bezier(.215, .61, .355, 1) .42s
  }

  .hamburger--collapse-r .hamburger-inner {
    bottom: 0;
    top: auto;
    transition-delay: .15s;
    transition-duration: .15s;
    transition-timing-function: cubic-bezier(.55, .055, .675, .19)
  }

  .hamburger--collapse-r .hamburger-inner:after {
    top: -20px;
    transition: top .3s cubic-bezier(.33333, .66667, .66667, 1) .3s, opacity .1s linear 0s
  }

  .hamburger--collapse-r .hamburger-inner:before {
    transition: top .12s cubic-bezier(.33333, .66667, .66667, 1) .3s, transform .15s cubic-bezier(.55, .055, .675, .19) 0s, -webkit-transform .15s cubic-bezier(.55, .055, .675, .19) 0s
  }

  .hamburger--collapse-r.is-active .hamburger-inner {
    transform: translate3d(0px, -10px, 0px) rotate(45deg);
    transition-delay: .32s;
    transition-timing-function: cubic-bezier(.215, .61, .355, 1)
  }

  .hamburger--collapse-r.is-active .hamburger-inner:after {
    opacity: 0;
    top: 0;
    transition: top .3s cubic-bezier(.33333, 0, .66667, .33333) 0s, opacity .1s linear .27s
  }

  .hamburger--collapse-r.is-active .hamburger-inner:before {
    top: 0;
    transform: rotate(90deg);
    transition: top .12s cubic-bezier(.33333, 0, .66667, .33333) .18s, transform .15s cubic-bezier(.215, .61, .355, 1) .42s, -webkit-transform .15s cubic-bezier(.215, .61, .355, 1) .42s
  }

  .hamburger--elastic .hamburger-inner {
    top: 2px;
    transition-duration: .4s;
    transition-timing-function: cubic-bezier(.68, -.55, .265, 1.55)
  }

  .hamburger--elastic .hamburger-inner:before {
    top: 10px;
    transition: opacity .15s ease .4s
  }

  .hamburger--elastic .hamburger-inner:after {
    top: 20px;
    transition: transform .4s cubic-bezier(.68, -.55, .265, 1.55) 0s, -webkit-transform .4s cubic-bezier(.68, -.55, .265, 1.55) 0s
  }

  .hamburger--elastic.is-active .hamburger-inner {
    transform: translate3d(0px, 10px, 0px) rotate(135deg);
    transition-delay: .1s
  }

  .hamburger--elastic.is-active .hamburger-inner:before {
    opacity: 0;
    transition-delay: 0s
  }

  .hamburger--elastic.is-active .hamburger-inner:after {
    transform: translate3d(0px, -20px, 0px) rotate(-270deg);
    transition-delay: .1s
  }

  .hamburger--elastic-r .hamburger-inner {
    top: 2px;
    transition-duration: .4s;
    transition-timing-function: cubic-bezier(.68, -.55, .265, 1.55)
  }

  .hamburger--elastic-r .hamburger-inner:before {
    top: 10px;
    transition: opacity .15s ease .4s
  }

  .hamburger--elastic-r .hamburger-inner:after {
    top: 20px;
    transition: transform .4s cubic-bezier(.68, -.55, .265, 1.55) 0s, -webkit-transform .4s cubic-bezier(.68, -.55, .265, 1.55) 0s
  }

  .hamburger--elastic-r.is-active .hamburger-inner {
    transform: translate3d(0px, 10px, 0px) rotate(-135deg);
    transition-delay: .1s
  }

  .hamburger--elastic-r.is-active .hamburger-inner:before {
    opacity: 0;
    transition-delay: 0s
  }

  .hamburger--elastic-r.is-active .hamburger-inner:after {
    transform: translate3d(0px, -20px, 0px) rotate(270deg);
    transition-delay: .1s
  }

  .hamburger--emphatic {
    overflow: hidden
  }

  .hamburger--emphatic .hamburger-inner {
    transition: background-color .2s ease-in .25s
  }

  .hamburger--emphatic .hamburger-inner:before {
    left: 0;
    transition: transform .2s cubic-bezier(.6, .04, .98, .335) 0s, top .05s linear .2s, left .2s ease-in .25s, -webkit-transform .2s cubic-bezier(.6, .04, .98, .335) 0s
  }

  .hamburger--emphatic .hamburger-inner:after {
    right: 0;
    top: 10px;
    transition: transform .2s cubic-bezier(.6, .04, .98, .335) 0s, top .05s linear .2s, right .2s ease-in .25s, -webkit-transform .2s cubic-bezier(.6, .04, .98, .335) 0s
  }

  .hamburger--emphatic.is-active .hamburger-inner {
    background-color: transparent;
    transition-delay: 0s;
    transition-timing-function: ease-out
  }

  .hamburger--emphatic.is-active .hamburger-inner:before {
    left: -80px;
    top: -80px;
    transform: translate3d(80px, 80px, 0px) rotate(45deg);
    transition: left .2s ease-out 0s, top .05s linear .2s, transform .2s cubic-bezier(.075, .82, .165, 1) .25s, -webkit-transform .2s cubic-bezier(.075, .82, .165, 1) .25s
  }

  .hamburger--emphatic.is-active .hamburger-inner:after {
    right: -80px;
    top: -80px;
    transform: translate3d(-80px, 80px, 0px) rotate(-45deg);
    transition: right .2s ease-out 0s, top .05s linear .2s, transform .2s cubic-bezier(.075, .82, .165, 1) .25s, -webkit-transform .2s cubic-bezier(.075, .82, .165, 1) .25s
  }

  .hamburger--emphatic-r {
    overflow: hidden
  }

  .hamburger--emphatic-r .hamburger-inner {
    transition: background-color .2s ease-in .25s
  }

  .hamburger--emphatic-r .hamburger-inner:before {
    left: 0;
    transition: transform .2s cubic-bezier(.6, .04, .98, .335) 0s, top .05s linear .2s, left .2s ease-in .25s, -webkit-transform .2s cubic-bezier(.6, .04, .98, .335) 0s
  }

  .hamburger--emphatic-r .hamburger-inner:after {
    right: 0;
    top: 10px;
    transition: transform .2s cubic-bezier(.6, .04, .98, .335) 0s, top .05s linear .2s, right .2s ease-in .25s, -webkit-transform .2s cubic-bezier(.6, .04, .98, .335) 0s
  }

  .hamburger--emphatic-r.is-active .hamburger-inner {
    background-color: transparent;
    transition-delay: 0s;
    transition-timing-function: ease-out
  }

  .hamburger--emphatic-r.is-active .hamburger-inner:before {
    left: -80px;
    top: 80px;
    transform: translate3d(80px, -80px, 0px) rotate(-45deg);
    transition: left .2s ease-out 0s, top .05s linear .2s, transform .2s cubic-bezier(.075, .82, .165, 1) .25s, -webkit-transform .2s cubic-bezier(.075, .82, .165, 1) .25s
  }

  .hamburger--emphatic-r.is-active .hamburger-inner:after {
    right: -80px;
    top: 80px;
    transform: translate3d(-80px, -80px, 0px) rotate(45deg);
    transition: right .2s ease-out 0s, top .05s linear .2s, transform .2s cubic-bezier(.075, .82, .165, 1) .25s, -webkit-transform .2s cubic-bezier(.075, .82, .165, 1) .25s
  }

  .hamburger--slider .hamburger-inner {
    top: 2px
  }

  .hamburger--slider .hamburger-inner:before {
    top: 10px;
    transition-duration: .2s;
    transition-property: transform, opacity, -webkit-transform;
    transition-timing-function: ease
  }

  .hamburger--slider .hamburger-inner:after {
    top: 20px
  }

  .hamburger--slider.is-active .hamburger-inner {
    transform: translate3d(0px, 10px, 0px) rotate(45deg)
  }

  .hamburger--slider.is-active .hamburger-inner:before {
    opacity: 0;
    transform: rotate(-45deg) translate3d(-5.71429px, -6px, 0px)
  }

  .hamburger--slider.is-active .hamburger-inner:after {
    transform: translate3d(0px, -20px, 0px) rotate(-90deg)
  }

  .hamburger--slider-r .hamburger-inner {
    top: 2px
  }

  .hamburger--slider-r .hamburger-inner:before {
    top: 10px;
    transition-duration: .2s;
    transition-property: transform, opacity, -webkit-transform;
    transition-timing-function: ease
  }

  .hamburger--slider-r .hamburger-inner:after {
    top: 20px
  }

  .hamburger--slider-r.is-active .hamburger-inner {
    transform: translate3d(0px, 10px, 0px) rotate(-45deg)
  }

  .hamburger--slider-r.is-active .hamburger-inner:before {
    opacity: 0;
    transform: rotate(45deg) translate3d(5.71429px, -6px, 0px)
  }

  .hamburger--slider-r.is-active .hamburger-inner:after {
    transform: translate3d(0px, -20px, 0px) rotate(90deg)
  }

  .hamburger--spring .hamburger-inner {
    top: 2px;
    transition: background-color 0s linear .15s
  }

  .hamburger--spring .hamburger-inner:before {
    top: 10px;
    transition: top .12s cubic-bezier(.33333, .66667, .66667, 1) .3s, transform .15s cubic-bezier(.55, .055, .675, .19) 0s, -webkit-transform .15s cubic-bezier(.55, .055, .675, .19) 0s
  }

  .hamburger--spring .hamburger-inner:after {
    top: 20px;
    transition: top .3s cubic-bezier(.33333, .66667, .66667, 1) .3s, transform .15s cubic-bezier(.55, .055, .675, .19) 0s, -webkit-transform .15s cubic-bezier(.55, .055, .675, .19) 0s
  }

  .hamburger--spring.is-active .hamburger-inner {
    background-color: transparent;
    transition-delay: .32s
  }

  .hamburger--spring.is-active .hamburger-inner:before {
    top: 0;
    transform: translate3d(0px, 10px, 0px) rotate(45deg);
    transition: top .12s cubic-bezier(.33333, 0, .66667, .33333) .18s, transform .15s cubic-bezier(.215, .61, .355, 1) .32s, -webkit-transform .15s cubic-bezier(.215, .61, .355, 1) .32s
  }

  .hamburger--spring.is-active .hamburger-inner:after {
    top: 0;
    transform: translate3d(0px, 10px, 0px) rotate(-45deg);
    transition: top .3s cubic-bezier(.33333, 0, .66667, .33333) 0s, transform .15s cubic-bezier(.215, .61, .355, 1) .32s, -webkit-transform .15s cubic-bezier(.215, .61, .355, 1) .32s
  }

  .hamburger--spring-r .hamburger-inner {
    bottom: 0;
    top: auto;
    transition-delay: 0s;
    transition-duration: .15s;
    transition-timing-function: cubic-bezier(.55, .055, .675, .19)
  }

  .hamburger--spring-r .hamburger-inner:after {
    top: -20px;
    transition: top .3s cubic-bezier(.33333, .66667, .66667, 1) .3s, opacity 0s linear 0s
  }

  .hamburger--spring-r .hamburger-inner:before {
    transition: top .12s cubic-bezier(.33333, .66667, .66667, 1) .3s, transform .15s cubic-bezier(.55, .055, .675, .19) 0s, -webkit-transform .15s cubic-bezier(.55, .055, .675, .19) 0s
  }

  .hamburger--spring-r.is-active .hamburger-inner {
    transform: translate3d(0px, -10px, 0px) rotate(-45deg);
    transition-delay: .32s;
    transition-timing-function: cubic-bezier(.215, .61, .355, 1)
  }

  .hamburger--spring-r.is-active .hamburger-inner:after {
    opacity: 0;
    top: 0;
    transition: top .3s cubic-bezier(.33333, 0, .66667, .33333) 0s, opacity 0s linear .32s
  }

  .hamburger--spring-r.is-active .hamburger-inner:before {
    top: 0;
    transform: rotate(90deg);
    transition: top .12s cubic-bezier(.33333, 0, .66667, .33333) .18s, transform .15s cubic-bezier(.215, .61, .355, 1) .32s, -webkit-transform .15s cubic-bezier(.215, .61, .355, 1) .32s
  }

  .hamburger--stand .hamburger-inner {
    transition: transform .1s cubic-bezier(.55, .055, .675, .19) .22s, background-color 0s linear .1s, -webkit-transform .1s cubic-bezier(.55, .055, .675, .19) .22s
  }

  .hamburger--stand .hamburger-inner:before {
    transition: top .1s ease-in .1s, transform .1s cubic-bezier(.55, .055, .675, .19) 0s, -webkit-transform .1s cubic-bezier(.55, .055, .675, .19) 0s
  }

  .hamburger--stand .hamburger-inner:after {
    transition: bottom .1s ease-in .1s, transform .1s cubic-bezier(.55, .055, .675, .19) 0s, -webkit-transform .1s cubic-bezier(.55, .055, .675, .19) 0s
  }

  .hamburger--stand.is-active .hamburger-inner {
    background-color: transparent;
    transform: rotate(90deg);
    transition: transform .1s cubic-bezier(.215, .61, .355, 1) 0s, background-color 0s linear .22s, -webkit-transform .1s cubic-bezier(.215, .61, .355, 1) 0s
  }

  .hamburger--stand.is-active .hamburger-inner:before {
    top: 0;
    transform: rotate(-45deg);
    transition: top .1s ease-out .12s, transform .1s cubic-bezier(.215, .61, .355, 1) .22s, -webkit-transform .1s cubic-bezier(.215, .61, .355, 1) .22s
  }

  .hamburger--stand.is-active .hamburger-inner:after {
    bottom: 0;
    transform: rotate(45deg);
    transition: bottom .1s ease-out .12s, transform .1s cubic-bezier(.215, .61, .355, 1) .22s, -webkit-transform .1s cubic-bezier(.215, .61, .355, 1) .22s
  }

  .hamburger--stand-r .hamburger-inner {
    transition: transform .1s cubic-bezier(.55, .055, .675, .19) .22s, background-color 0s linear .1s, -webkit-transform .1s cubic-bezier(.55, .055, .675, .19) .22s
  }

  .hamburger--stand-r .hamburger-inner:before {
    transition: top .1s ease-in .1s, transform .1s cubic-bezier(.55, .055, .675, .19) 0s, -webkit-transform .1s cubic-bezier(.55, .055, .675, .19) 0s
  }

  .hamburger--stand-r .hamburger-inner:after {
    transition: bottom .1s ease-in .1s, transform .1s cubic-bezier(.55, .055, .675, .19) 0s, -webkit-transform .1s cubic-bezier(.55, .055, .675, .19) 0s
  }

  .hamburger--stand-r.is-active .hamburger-inner {
    background-color: transparent;
    transform: rotate(-90deg);
    transition: transform .1s cubic-bezier(.215, .61, .355, 1) 0s, background-color 0s linear .22s, -webkit-transform .1s cubic-bezier(.215, .61, .355, 1) 0s
  }

  .hamburger--stand-r.is-active .hamburger-inner:before {
    top: 0;
    transform: rotate(-45deg);
    transition: top .1s ease-out .12s, transform .1s cubic-bezier(.215, .61, .355, 1) .22s, -webkit-transform .1s cubic-bezier(.215, .61, .355, 1) .22s
  }

  .hamburger--stand-r.is-active .hamburger-inner:after {
    bottom: 0;
    transform: rotate(45deg);
    transition: bottom .1s ease-out .12s, transform .1s cubic-bezier(.215, .61, .355, 1) .22s, -webkit-transform .1s cubic-bezier(.215, .61, .355, 1) .22s
  }

  .hamburger--spin .hamburger-inner {
    transition-duration: .3s;
    transition-timing-function: cubic-bezier(.55, .055, .675, .19)
  }

  .hamburger--spin .hamburger-inner:before {
    transition: top .1s ease-in .34s, opacity .1s ease-in 0s
  }

  .hamburger--spin .hamburger-inner:after {
    transition: bottom .1s ease-in .34s, transform .3s cubic-bezier(.55, .055, .675, .19) 0s, -webkit-transform .3s cubic-bezier(.55, .055, .675, .19) 0s
  }

  .hamburger--spin.is-active .hamburger-inner {
    transform: rotate(225deg);
    transition-delay: .14s;
    transition-timing-function: cubic-bezier(.215, .61, .355, 1)
  }

  .hamburger--spin.is-active .hamburger-inner:before {
    opacity: 0;
    top: 0;
    transition: top .1s ease-out 0s, opacity .1s ease-out .14s
  }

  .hamburger--spin.is-active .hamburger-inner:after {
    bottom: 0;
    transform: rotate(-90deg);
    transition: bottom .1s ease-out 0s, transform .3s cubic-bezier(.215, .61, .355, 1) .14s, -webkit-transform .3s cubic-bezier(.215, .61, .355, 1) .14s
  }

  .hamburger--spin-r .hamburger-inner {
    transition-duration: .3s;
    transition-timing-function: cubic-bezier(.55, .055, .675, .19)
  }

  .hamburger--spin-r .hamburger-inner:before {
    transition: top .1s ease-in .34s, opacity .1s ease-in 0s
  }

  .hamburger--spin-r .hamburger-inner:after {
    transition: bottom .1s ease-in .34s, transform .3s cubic-bezier(.55, .055, .675, .19) 0s, -webkit-transform .3s cubic-bezier(.55, .055, .675, .19) 0s
  }

  .hamburger--spin-r.is-active .hamburger-inner {
    transform: rotate(-225deg);
    transition-delay: .14s;
    transition-timing-function: cubic-bezier(.215, .61, .355, 1)
  }

  .hamburger--spin-r.is-active .hamburger-inner:before {
    opacity: 0;
    top: 0;
    transition: top .1s ease-out 0s, opacity .1s ease-out .14s
  }

  .hamburger--spin-r.is-active .hamburger-inner:after {
    bottom: 0;
    transform: rotate(-90deg);
    transition: bottom .1s ease-out 0s, transform .3s cubic-bezier(.215, .61, .355, 1) .14s, -webkit-transform .3s cubic-bezier(.215, .61, .355, 1) .14s
  }

  .hamburger--squeeze .hamburger-inner {
    transition-duration: .1s;
    transition-timing-function: cubic-bezier(.55, .055, .675, .19)
  }

  .hamburger--squeeze .hamburger-inner:before {
    transition: top .1s ease .14s, opacity .1s ease 0s
  }

  .hamburger--squeeze .hamburger-inner:after {
    transition: bottom .1s ease .14s, transform .1s cubic-bezier(.55, .055, .675, .19) 0s, -webkit-transform .1s cubic-bezier(.55, .055, .675, .19) 0s
  }

  .hamburger--squeeze.is-active .hamburger-inner {
    transform: rotate(45deg);
    transition-delay: .14s;
    transition-timing-function: cubic-bezier(.215, .61, .355, 1)
  }

  .hamburger--squeeze.is-active .hamburger-inner:before {
    opacity: 0;
    top: 0;
    transition: top .1s ease 0s, opacity .1s ease .14s
  }

  .hamburger--squeeze.is-active .hamburger-inner:after {
    bottom: 0;
    transform: rotate(-90deg);
    transition: bottom .1s ease 0s, transform .1s cubic-bezier(.215, .61, .355, 1) .14s, -webkit-transform .1s cubic-bezier(.215, .61, .355, 1) .14s
  }

  .hamburger--vortex .hamburger-inner {
    transition-duration: .3s;
    transition-timing-function: cubic-bezier(.19, 1, .22, 1)
  }

  .hamburger--vortex .hamburger-inner:after,
  .hamburger--vortex .hamburger-inner:before {
    transition-delay: .1s;
    transition-duration: 0s;
    transition-timing-function: linear
  }

  .hamburger--vortex .hamburger-inner:before {
    transition-property: top, opacity
  }

  .hamburger--vortex .hamburger-inner:after {
    transition-property: bottom, transform, -webkit-transform
  }

  .hamburger--vortex.is-active .hamburger-inner {
    transform: rotate(765deg);
    transition-timing-function: cubic-bezier(.19, 1, .22, 1)
  }

  .hamburger--vortex.is-active .hamburger-inner:after,
  .hamburger--vortex.is-active .hamburger-inner:before {
    transition-delay: 0s
  }

  .hamburger--vortex.is-active .hamburger-inner:before {
    opacity: 0;
    top: 0
  }

  .hamburger--vortex.is-active .hamburger-inner:after {
    bottom: 0;
    transform: rotate(90deg)
  }

  .hamburger--vortex-r .hamburger-inner {
    transition-duration: .3s;
    transition-timing-function: cubic-bezier(.19, 1, .22, 1)
  }

  .hamburger--vortex-r .hamburger-inner:after,
  .hamburger--vortex-r .hamburger-inner:before {
    transition-delay: .1s;
    transition-duration: 0s;
    transition-timing-function: linear
  }

  .hamburger--vortex-r .hamburger-inner:before {
    transition-property: top, opacity
  }

  .hamburger--vortex-r .hamburger-inner:after {
    transition-property: bottom, transform, -webkit-transform
  }

  .hamburger--vortex-r.is-active .hamburger-inner {
    transform: rotate(-765deg);
    transition-timing-function: cubic-bezier(.19, 1, .22, 1)
  }

  .hamburger--vortex-r.is-active .hamburger-inner:after,
  .hamburger--vortex-r.is-active .hamburger-inner:before {
    transition-delay: 0s
  }

  .hamburger--vortex-r.is-active .hamburger-inner:before {
    opacity: 0;
    top: 0
  }

  .hamburger--vortex-r.is-active .hamburger-inner:after {
    bottom: 0;
    transform: rotate(-90deg)
  }

  .hamburger .hamburger-inner,
  .hamburger .hamburger-inner:after,
  .hamburger .hamburger-inner:before {
    background-color: #666
  }

  .hamburger--header {
    cursor: default;
    margin-right: -5px;
    padding-left: 5px;
    padding-right: 0;
    vertical-align: middle
  }

  .hamburger--header .hamburger-inner,
  .hamburger--header .hamburger-inner:after,
  .hamburger--header .hamburger-inner:before {
    background-color: #222
  }

  .hamburger--header.hamburger--elastic .hamburger-inner,
  .hamburger--header.hamburger--slider .hamburger-inner {
    top: 2px
  }

  .hamburger--header:hover {
    opacity: 1
  }

  .hamburger-wrap {
    text-align: center
  }

  .hamburger--accessible {
    display: inline-block
  }

  .hamburger--accessible .hamburger-box {
    display: inline-block;
    vertical-align: middle
  }

  .hamburger--accessible .hamburger-inner,
  .hamburger--accessible .hamburger-inner:after,
  .hamburger--accessible .hamburger-inner:before {
    background-color: #222
  }

  .hamburger-label {
    display: inline-block;
    font-weight: 600;
    margin-left: 5px;
    text-transform: uppercase;
    vertical-align: middle
  }

  .hamburger-label-hidden {
    display: none
  }

  .hamburger--example {
    outline: 1px dashed cyan
  }

  .hamburger--example .hamburger-box {
    outline: 1px dashed green
  }

  .hamburger--example .hamburger-inner,
  .hamburger--example .hamburger-inner:after,
  .hamburger--example .hamburger-inner:before {
    background-color: #222
  }

  #google_recaptcha_webform_client_form_117 {
    padding: 12px 0 25px
  }

  #google_recaptcha_webform_client_form_117>div {
    margin: 0 auto
  }

  @media (max-width:991px) {
    #navbar-collapse {
      position: fixed;
      right: -320px;
      top: 0;
      -webkit-transition: .3s ease all;
      transition: .3s ease all;
      background: #00c2e5;
      height: 100% !important;
      width: 320px;
      padding: 7px 15px 2px;
      z-index: 999;
      overflow-x: none;
      overflow-y: none
    }

    #navbar-collapse.collapse.in {
      display: block;
      position: fixed;
      z-index: 999;
      right: 0;
      top: 0;
      background: #00c2e5;
      height: 100% !important;
      width: 320px;
      box-shadow: -5px 0 6px -1px rgba(51, 51, 51, .2)
    }
  }

  .btn-readmore {
    background: #37cea6;
    color: #fff;
    display: block;
    text-align: center;
    font-size: 30px;
    font-weight: 800;
    text-shadow: 0 1px 2px rgba(0, 0, 0, .5);
    margin-left: auto;
    margin-right: auto;
    margin-top: 25px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    border: 0;
    padding: 3px 30px
  }

  .design_tg {
    display: none
  }

  .sub-page-section {
    background: url(img/resources/debora-pilati-dOG0z4-gqp0-unsplash.jpg);
    background-size: cover;
    padding-top: 25px;
    padding-bottom: 25px;
    text-align: center
  }

  .sub-page-section h2 {
    font-size: 36px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    text-align: center;
    max-width: 750px;
    margin: 0 auto;
    line-height: 40px
  }

  a.gquote {
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    background: #efa5a1;
    color: #fff;
    display: inline-block;
    text-align: center;
    font-size: 21px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
    border-radius: 60px;
    padding: 5px 30px
  }

  a.gquote:hover {
    background: #000;
    color: #fff
  }

  .bookacallbtn a.gquote {
    background: #fff;
    color: #00c2e5;
    border: 2px solid transparent
  }

  .bookacallbtn a.gquote:hover {
    background: 0 0;
    border: 2px solid #fff;
    color: #fff
  }

  .bookacallbtnblue {
    text-align: center
  }

  .page-node-251 .field-name-field-full-width-top {
    font-size: 21px;
    padding: 30px 0;
    display: block;
    margin: 20px 0;
    clear: both;
    width: 100%;
    overflow: hidden
  }

  .contactsmap #block-webform-client-block-117 {
    background: #3e3d4e;
    padding: 30px 15px;
    margin-bottom: 20px;
    color: #fff
  }

  .contactsmap #block-webform-client-block-260 {
    background: #3e3d4e;
    padding: 30px 15px;
    margin-bottom: 20px;
    color: #fff
  }

  .contactsmap #block-webform-client-block-264 {
    background: #3e3d4e;
    padding: 30px 15px;
    margin-bottom: 20px;
    color: #fff
  }

  .bookacall-wrapper h2 {
    font-size: 28px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    text-align: center
  }

  .page-node-251 .field-name-body h2 {
    font-size: 36px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    text-align: left;
    background: url(img/SEO-icon-1.png) no-repeat left 0;
    padding-top: 100px
  }

  .page-node-251 .field-name-body h2:after {
    content: "";
    display: block;
    border-bottom: 7px solid #00c2e5;
    width: 115px;
    padding-top: 20px
  }

  #bookacall {
    clear: both;
    padding-top: 25px
  }

  #block-block-36 {
    padding-bottom: 32px
  }

  #block-block-41 {
    padding-bottom: 32px;
    text-align: center
  }

  #block-block-41 h2 {
    color: #3e3d4e;
    font-size: 41px;
    font-family: 'Poppins', sans-serif;
    font-weight: 800
  }

  .contactsmap h2 {
    color: #fff;
    text-transform: uppercase;
    font-size: 36px;
    margin-top: 5px;
    font-family: 'Poppins', sans-serif;
    font-weight: 800
  }

  .contactsmap .webform-client-form .form-control {
    background: #525160;
    border: none;
    box-shadow: none;
    border-radius: 0;
    height: 46px;
    margin-bottom: 17px;
    color: #fff
  }

  .contactsmap .webform-client-form .form-control::placeholder {
    color: #fff;
    opacity: 1
  }

  .contactsmap .webform-client-form .form-control:-ms-input-placeholder {
    color: #fff
  }

  .contactsmap .webform-client-form .form-control::-ms-input-placeholder {
    color: #fff
  }

  .contactsmap .webform-client-form .form-control.form-textarea {
    height: auto;
    min-height: 96px
  }

  .contactsmap .webform-client-form .form-actions {
    text-align: left
  }

  .contactsmap .webform-client-form .form-group {
    margin-bottom: 10px;
    text-align: left
  }

  div#google_recaptcha_webform_client_form_117 div {
    float: left
  }

  div#google_recaptcha_webform_client_form_117 {
    width: 100%;
    float: left
  }

  .page-node-251 #block-block-41,
  .page-node-262 #block-block-41 {
    padding-bottom: 60px;
    text-align: center
  }

  .page-node-262 .node-page .field-name-body img {
    float: none;
    margin: 10px auto
  }

  #block-webform-client-block-264 h2 {
    color: #fff;
    font-size: 34px;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    margin-bottom: 20px;
    text-align: center
  }

  .gquote.downloadbtn {
    max-width: 245px;
    display: block
  }

  .gquote.downloadbtn .glyphicon {
    top: 3px
  }

  .page-node-59 .content_below,
  .page-node-252 .content_below,
  .page-node-261 .content_below,
  .page-node-262 .content_below,
  .page-node-266 .content_below,
  .page-node-251 .content_below,
  .page-node-267 .content_below {
    padding-top: 135px;
    background: url(img/blog-icon.png);
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: no-repeat;
    background-position: center 0;
    padding-bottom: 40px;
    clear: both;
    overflow: hidden;
    text-align: center
  }

  .page-node-267 .node-page .field-name-body img {
    float: none;
    margin: 0 auto 15px
  }

  #block-block-36 h4 {
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    font-size: 26px;
    color: #3e3d4e;
    margin: 15px auto
  }

  #block-block-41 h4 {
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    font-size: 26px;
    color: #3e3d4e;
    margin: 15px auto
  }

  #block-views-our-clients-block-1 h2 {
    font-family: 'Poppins', sans-serif;
    font-weight: 200;
    font-size: 40px;
    color: #3e3d4e;
    margin-top: 0;
    margin-bottom: 20px
  }

  #block-views-our-clients-block-1 h2 b {
    display: block;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    text-transform: capitalize
  }

  .ourclients img {
    filter: grayscale(100%);
    opacity: .5
  }

  section#block-views-testimonials-block {
    border-top: 1px solid #ccc;
    padding-top: 25px;
    margin-top: 15px
  }

  .view-testimonials .views-field.views-field-body {
    background: #a0a0a0;
    color: #fff;
    font-size: 14px;
    padding: 15px;
    max-width: 72%;
    margin-left: 18%;
    border-top-left-radius: 30px;
    border-bottom-right-radius: 30px;
    margin-bottom: 25px
  }

  .view-testimonials .views-field.views-field-field-image {
    float: left;
    margin-left: 24%;
    max-width: 50px;
    margin-right: 4%
  }

  .views-field.views-field-title {
    text-align: left;
    color: #a0a0a0
  }

  .views-field.views-field-title h4.field-content {
    color: #a0a0a0;
    margin-bottom: 5px
  }

  .views-field.views-field-field-designation .field-content {
    color: #a0a0a0;
    font-size: 12px;
    text-transform: uppercase
  }

  .views-field.views-field-field-designation {
    text-align: left
  }

  .view-id-testimonials .bx-controls.bx-has-pager {
    position: absolute;
    top: 44%;
    left: 5%
  }

  .view-id-testimonials .bx-wrapper .bx-pager.bx-default-pager a {
    background: #ccc
  }

  .view-id-testimonials .bx-wrapper .bx-pager.bx-default-pager a.active {
    background: #4e4e4e
  }

  .page-node-59 .field-item.even {
    display: none
  }

  .page-node-59 .main-container {
    margin-top: 35px;
    margin-bottom: 35px
  }

  .page-node-138 .content-wrapper,
  .page-node-59 .content-wrapper,
  .page-node-252 .content-wrapper {
    background: url(img/contact-content-bg.jpg) no-repeat left top
  }

  .page-node-261 .content-wrapper,
  .page-node-266 .content-wrapper {
    background: url(img/contact-content-bg.jpg) no-repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-size: auto;
    background-size: cover;
    padding-bottom: 100px;
    background-position: left bottom
  }

  .page-node-138 .node-page .field-name-body img {
    float: none;
    margin: 10px auto
  }

  .page-node-138 .node-page .field-name-body h3 {
    font-size: 36px;
    color: #3e3d4e;
    text-align: center;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    line-height: 1.2
  }

  .page-node-138 .node-page .field-name-body {
    text-align: center;
    font-size: 20px;
    color: #3e3d4e;
    font-weight: 300
  }

  .page-node-138 .node-page .field-name-body strong {
    display: block
  }

  .page-node-267 .node-page .field-name-body {
    padding-top: 25px
  }

  .page-node-251 .node-page .field-name-body {
    padding-top: 25px
  }

  @media (min-width:980px) {
    .page-node-251 .node-page .field-name-body {
      text-align: left
    }

    .page-node-251 .field-name-body h2 {
      font-size: 63px
    }

    .bookacall-wrapper h2 {
      font-size: 63px
    }

    #bookacall {
      clear: both;
      padding-top: 85px
    }

    .page-node-138 .node-page .field-name-body h3 {
      font-size: 50px
    }

    .contactsmap #block-webform-client-block-117 {
      padding: 30px 35px;
      margin-bottom: 50px
    }

    .contactsmap #block-webform-client-block-260 {
      padding: 30px 35px;
      margin-bottom: 50px
    }

    .contactsmap #block-webform-client-block-264 {
      padding: 30px 35px;
      margin-bottom: 50px
    }

    ul.menu.nav.navbar-nav.secondary {
      width: 120%;
      margin-right: -20%;
      margin-left: -30px;
    }

    .front header#navbar {
      position: fixed;
      background: #16222A;
      background: -webkit-linear-gradient(59deg, #efa5a1, #b365f3);
      background: linear-gradient(59deg, #efa5a1, #b365f3);
      z-index: 999;
      padding-bottom: 30px;
      background-size: cover;
      max-width: 1903px
    }

    .front .header-wrapper .page-title {
      padding-top: 116px
    }

    .front .header-wrapper {
      background-size: contain !important;
      max-width: 1903px;
      margin: 0 auto;
      float: none
    }

    .not-front header#navbar {
      position: fixed;
      z-index: 999;
      background: #fff;
      padding-bottom: 25px
    }

    .not-front .page-title {
      padding-top: 116px
    }

    ul.secondary li.last.leaf a {
      background: #f19830;
      padding: 7px 21px;
      font-weight: 700;
      font-size: 15px;
      border-radius: 21px;
      border: 2px solid #fff;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      margin-top: 9px;
      color: #fff
    }

    ul.secondary li.last.leaf a:hover {
      background: #000;
      color: #fff
    }

    .col-lg-4.gfirmtop {
      padding: 0
    }

    .row.frd_secn {
      margin-top: 30px;
      margin-bottom: 20px;
      text-align: center
    }

    .gtopsec {
      padding: 0 !important;
      max-width: 200px;
      margin-left: auto;
      margin-right: auto
    }
  }

  @media (min-width:1600px) {
    .region.region-footer {
      width: 115%;
      margin-left: -10%
    }
  }

  @media (max-width:767px) {
    #block-block-36 {
      padding-bottom: 32px;
      text-align: center
    }

    #block-block-41 {
      padding-bottom: 32px;
      text-align: left
    }

    .frd_secn {
      padding-top: 20px
    }

    .frd_secn .col-lg-4 {
      margin-bottom: 0px
    }

    .contactcontent {
      padding-top: 35px
    }

    .contactaddmap {
      display: none
    }

    .page-node-266 .contactcontent {
      padding-top: 0
    }

    .orderf {
      display: flex;
      flex-direction: column
    }

    .contacts_cnt {
      order: 2
    }

    .contactsmap {
      order: 1;
      padding-left: 0;
      padding-right: 0
    }

    .contactsmap .webform-client-form .form-control {
      margin-bottom: 10px
    }
  }

  #webform-client-form-260 .form-actions .form-submit {
    text-align: center;
    background: #00c2e5;
    border: none;
    border-radius: 0;
    font-size: 18px;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    text-transform: uppercase;
    padding: 12.5px 20px;
    color: #fff
  }

  .get-free-quote a {
    background: #f19830;
    padding: 7px 30px;
    font-weight: 900;
    font-size: 23px;
    border-radius: 35px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    color: #fff;
    text-transform: uppercase;
    display: inline-block;
    border: 2px solid #f19830
  }

  .get-free-quote a:hover {
    background: 0 0;
    color: #fff;
    border: 2px solid #f19830
  }

  #block-block-1 {
    padding-bottom: 70px
  }

  .node-type-article .blogimg {
    margin-bottom: 25px
  }

  .not-front .navbar-nav>li>a {
    color: #000
  }

  .page-node-93 .section-two .section-content {
    text-align: left
  }

  .page-node-93 .section-two .section-content h2 {
    background: url(img/icons/Mission-icon.png);
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: no-repeat;
    background-position: left top;
    padding-top: 100px;
    text-align: left
  }

  .navbar-nav>li>a {
    color: #fff;
    display: block;
    position: relative;
    font-size: 20px;
    text-transform: uppercase;
    padding: 18px;
    -webkit-transition: all .35s;
    -o-transition: all .35s;
    transition: all .35s;
    -moz-transition: all .35s;
    -ms-transition: all .35s;
    font-family: 'Poppins', sans-serif;
    font-weight: 200
  }

  .nav .open>a,
  .nav .open>a:hover,
  .nav .open>a:focus {
    background-color: transparent;
    border-color: transparent;
    color: #0ff
  }

  .navbar-default .navbar-nav>.active>a,
  .navbar-default .navbar-nav>.active>a:hover,
  .navbar-default .navbar-nav>.active>a:focus {
    color: #0ff;
    background-color: transparent !important
  }

  .navbar-nav>li>a.active,
  .navbar-nav>li>a.active-trail,
  .navbar-nav>li>a:hover {
    color: #00c2e5;
    background: 0 0
  }

  .not-front .navbar-nav>li>a.active,
  .not-front .navbar-nav>li>a:hover {
    color: #00c2e5
  }

  .navbar-nav>li>a .caret {
    border-top: 6px dashed;
    border-right: 6px solid transparent;
    border-left: 6px solid transparent
  }

  .dropdown-menu>li {
    padding: 0;
    margin-bottom: 0;
    border-bottom: 1px solid rgba(0, 0, 0, .3)
  }

  .dropdown-menu>li.last {
    border: none
  }

  .dropdown-menu>li>a {
    background: 0 0;
    color: #000;
    display: block;
    line-height: 26px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 400;
    text-transform: none;
    -webkit-transition: all .2s ease-out;
    -o-transition: all .2s ease-out;
    transition: all .2s ease-out;
    -moz-transition: all .2s ease-out;
    -ms-transition: all .2s ease-out;
    position: relative;
    padding: 10px 15px
  }

  .dropdown-menu>li>a:hover {
    background: 0 0
  }

  .dropdown-menu>.active>a,
  .dropdown-menu>.active>a:hover,
  .dropdown-menu>.active>a:focus {
    background: 0 0;
    color: #00c2e5
  }

  .page-title {
    clear: both;
    overflow: hidden
  }

  .latestworks-info img {
    border-radius: 6px
  }

  .latestworks-info h4 {
    margin-top: 15px
  }

  .ourworks .bx-wrapper .bx-pager.bx-default-pager a {
    background: #fff;
    text-indent: -9999px;
    display: block;
    width: 15px;
    height: 15px;
    margin: 0 5px;
    outline: 0;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 100%;
    border: 5px solid #000
  }

  .bx-wrapper .bx-pager.bx-default-pager a:hover,
  .bx-wrapper .bx-pager.bx-default-pager a.active {
    background: #000
  }

  .block-image {
    position: relative;
    margin-bottom: 50px
  }

  .block-body h2 {
    color: #3e3d4e;
    font-size: 36px;
    font-family: 'Poppins', sans-serif;
    font-weight: 800
  }

  .block-body {
    font-size: 18px;
    color: #000;
    font-weight: 300;
    line-height: 1.5
  }

  .block-body a {
    font-size: 16px;
    font-weight: 900;
    color: #37cea6;
    text-transform: uppercase;
    position: relative;
    font-family: 'Poppins', sans-serif;
    font-weight: 800
  }

  .block-body a:after {
    content: "\f30b";
    font-size: 14px;
    font-family: "Font Awesome 5 Free";
    padding-left: 5px
  }

  .content-middle-wrapper {
    width: 100%;
    overflow: hidden;
    clear: both;
    background: url(img/middle-hang-bg.png);
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: no-repeat;
    background-position: center 0;
    padding-top: 175px;
    padding-bottom: 0;
    position: relative
  }

  .content-middle-inner {
    max-width: 1369px;
    margin-left: auto;
    margin-right: auto
  }

  #block-block-3 h2 {
    font-size: 111px;
    font-weight: 100;
    margin-bottom: 45px;
    font-family: 'Poppins', sans-serif;
    font-weight: 100;
    color: #3e3d4e
  }

  #block-block-3 h2 strong {
    font-family: 'Poppins', sans-serif;
    font-weight: 800
  }

  .res-view-row h3 {
    color: #3e3d4e;
    font-size: 22px;
    font-family: 'Poppins', sans-serif;
    font-weight: 800
  }

  .res-view-row {
    background: url(img/code-icon.png);
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-repeat: no-repeat;
    padding-left: 100px;
    background-position: left 5px;
    font-size: 18px;
    font-weight: 300;
    margin-bottom: 45px
  }

  .res-view-row.res-view-row-2 {
    background: url(img/FluidDesign.png);
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-repeat: no-repeat
  }

  .res-view-row.res-view-row-3 {
    background: url(img/UI-UX.png);
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-repeat: no-repeat
  }

  .view-front-portfolio .portfolio-item .views-field-field-image {
    margin-bottom: 15px;
    overflow: hidden;
    position: relative
  }

  .view-front-portfolio .portfolio-item .views-field-field-image img {
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    width: 100%;
    height: auto
  }

  .view-front-portfolio .portfolio-item .views-field-field-image:hover img {
    -webkit-transform: scale(1.2);
    transform: scale(1.2)
  }

  .view-front-portfolio .bx-controls {
    max-width: 160px;
    position: relative;
    margin: 30px auto
  }

  .view-front-portfolio .bx-wrapper .bx-controls-direction a {
    top: auto;
    bottom: -45px
  }

  .view-front-portfolio .bx-wrapper .bx-prev {
    background: url(img/left-arrow.png) no-repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-position: center;
    border: 2px solid #3e3d4e;
    width: 62px;
    height: 62px
  }

  .view-front-portfolio .bx-wrapper .bx-next {
    background: url(img/right-arrow.png) no-repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-position: center;
    background-position: center;
    border: 2px solid #3e3d4e;
    width: 62px;
    height: 62px
  }

  .view-our-blog .bx-controls {
    max-width: 160px;
    position: relative;
    margin: 10px auto
  }

  .view-our-blog .bx-wrapper .bx-controls-direction a {
    top: auto;
    bottom: -45px
  }

  .view-our-blog .bx-wrapper .bx-prev {
    background: url(img/left-arrow.png) no-repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-position: center;
    border: 2px solid #3e3d4e;
    width: 62px;
    height: 62px
  }

  .view-our-blog .bx-wrapper .bx-next {
    background: url(img/right-arrow.png) no-repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-position: center;
    background-position: center;
    border: 2px solid #3e3d4e;
    width: 62px;
    height: 62px
  }

  .callusbox {
    background: url(img/background.jpg) top center repeat-x;
    background-size: auto auto;
    background-size: cover
  }

  .call-us {
    color: #fff;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    ;
    font-size: 36px;
    margin: 30px 0
  }

  .call-us span {
    display: block;
    font-size: 30px;
    font-weight: 100;
    font-family: 'Poppins', sans-serif;
  }

  .number-box {
    border-radius: 50px;
    padding: 2px 10px;
    color: #2dc0f0;
    background: #fff;
    text-align: center;
    font-size: 30px;
    font-weight: 800;
    margin-top: 40px;
    max-width: 270px;
    line-height: 47px;
    -webkit-transition: all .35s;
    -o-transition: all .35s;
    transition: all .35s;
    -moz-transition: all .35s;
    -ms-transition: all .35s
  }

  .number-box:hover {
    color: #fff;
    background: #2dc0f0
  }

  .number-box:hover a {
    color: #fff
  }

  #block-webform-client-block-278 {
    clear: both;
    margin-bottom: 65px
  }

  #webform-client-form-32 {
    margin-left: -15px;
    margin-right: -15px
  }

  #webform-client-form-32.webform-client-form .form-item {
    margin-bottom: 30px;
    color: #777
  }

  #webform-client-form-32.webform-client-form .form-item input[type=text],
  #webform-client-form-32.webform-client-form .form-item input[type=email],
  #webform-client-form-32.webform-client-form .form-item textarea {
    width: 100%;
    border: 2px solid #ccc;
    position: relative;
    height: auto;
    padding: 12px;
    border-radius: 0
  }

  #webform-client-form-32 .form-actions {
    clear: both;
    text-align: center
  }

  #webform-client-form-32 .form-actions .form-submit {
    border: 2px solid #069;
    border-radius: 0;
    text-transform: uppercase;
    padding: 12px 45px;
    background: 0 0;
    color: #069;
    -webkit-transition: all .35s;
    -o-transition: all .35s;
    transition: all .35s;
    -moz-transition: all .35s;
    -ms-transition: all .35s
  }

  #webform-client-form-32 .form-actions .form-submit:hover {
    border: 2px solid #069;
    background: #069;
    color: #fff
  }

  .form-control::-moz-placeholder {
    color: #777;
    opacity: 1
  }

  .highlighted {
    text-align: center;
    clear: both;
    overflow: hidden;
    margin-top: 10px
  }

  .not-front .main-container {
    margin-top: 45px;
    margin-bottom: 45px
  }

  .page-node-67 .frontportfolio {
    background: 0 0;
    padding-top: 50px;
    padding-bottom: 0
  }

  .not-front .frontportfolio {
    background-color: #fff
  }

  .frontportfolio {
    width: 100%;
    max-width: 100%;
    clear: both;
    background: url(img/middle-hang-bg.png);
    background-color: rgba(0, 0, 0, 0);
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: no-repeat;
    background-color: #f0f0f1;
    background-position: center 0;
    padding-top: 175px;
    padding-bottom: 150px;
    position: relative
  }

  #block-block-4 .block-title {
    text-transform: uppercase;
    font-size: 18px;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    position: relative;
    padding-left: 260px
  }

  #block-block-4 .block-title:before {
    content: "";
    position: absolute;
    border-top: 1px solid #3e3d4e;
    width: 175px;
    top: 10px;
    left: 0
  }

  #block-block-4 h3 {
    font-size: 76px;
    font-family: 'Poppins', sans-serif;
    font-weight: 100;
    line-height: 1
  }

  #block-block-4 h3 strong {
    font-weight: 800;
    font-family: 'Poppins', sans-serif;
    font-weight: 800
  }

  #block-block-4 .portfolioinfo {
    font-size: 18px;
    font-weight: 300;
    margin-top: 70px;
    margin-bottom: 90px;
    position: relative
  }

  #block-block-4 .portfolioinfo:after {
    content: "";
    border-bottom: 7px solid #00c2e5;
    position: absolute;
    bottom: -25px;
    width: 45px;
    left: 0
  }

  .front .view-front-portfolio .portfolio-item .views-field-field-image {
    margin-bottom: 0
  }

  .front .view-front-portfolio .portfolio-item {
    padding: 10px
  }

  .front .view-front-portfolio .more-link,
  #block-views-front-portfolio-block-1 .more-link {
    text-align: center
  }

  .front .view-front-portfolio .more-link a,
  #block-views-front-portfolio-block-1 .more-link a {
    display: inline-block;
    border: 2px solid #00c2e5;
    padding: 10px 35px;
    font-size: 16px;
    color: #00c2e5;
    margin-top: 25px;
    font-family: 'Poppins', sans-serif;
    font-weight: 800
  }

  .view-front-portfolio .more-link a:hover,
  #block-views-front-portfolio-block-1 .more-link a:hover {
    background: #00c2e5;
    color: #fff
  }

  .footer {
    background: url(img/dot-bg.png);
    margin-top: 0;
    border: none;
    padding-top: 80px;
    position: relative;
    max-width: 100%;
    overflow: hidden;
  }

  #block-block-6 {
    font-family: sans-serif;
    font-size: 17px;
    font-weight: 300;
    color: #222;
    line-height: 1.8;
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: no-repeat;
    background-position: 0 0;
    background-color: #f4d7d6;
    padding-left: 190px
  }

  .poppins #block-block-6 {
    font-family: 'Poppins', sans-serif;
  }

  .emailinfo a {
    font-size: 24px;
    font-weight: 800;
    color: #3e3d4e;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
  }

  .ourblogs {
    background-image: url(img/blog-icon.png);
    background-position: center 0;
    background-repeat: no-repeat;
    padding-top: 135px;
    padding-bottom: 40px;
    background-size: 55px, 155px;
  }

  .hp-blogs-cats a {
    font-size: 13px;
    padding: 5px 10px;
    background: #00c2e5;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    color: #fff;
    text-shadow: 0px 1px 1px rgba(0, 0, 0, .5);
  }

  .hp-blogs-cats .hpcat {
    float: left
  }

  .hp-blogs-cats .postdate {
    float: right;
    font-size: 15px;
    padding: 2px 5px;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    color: #888;
  }

  .hp-blogs-cats {
    overflow: hidden;
    clear: both;
    margin: 10px 0
  }

  .hp-blogs-title h4 {
    margin-top: 15px;
    margin-bottom: 5px;
    min-height: 46px
  }

  .hp-blogs-title h4 a {
    color: #222;
    font-size: 19px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    text-transform: none
  }

  .hp-blogs {
    margin-bottom: 22px
  }

  .ourblogs h3 {
    font-size: 76px;
    font-family: 'Poppins', sans-serif;
    font-weight: 100;
    margin-top: -25px;
    margin-bottom: 25px
  }

  .ourblogs h3 strong {
    font-family: 'Poppins', sans-serif;
    font-weight: 800
  }

  .hp-blogs-desc {
    color: #222;
    font-size: 14px;
  }

  .hp-blogs-img {
    overflow: hidden;
    position: relative
  }

  .hp-blogs-img img {
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    width: 100%;
    height: auto
  }

  .hp-blogs-img:hover img {
    -webkit-transform: scale(1.2);
    transform: scale(1.2)
  }

  #block-views-our-blog-block-1 {
    padding-top: 135px;
    background: url(img/blog-icon.png);
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: no-repeat;
    background-position: center 0;
    padding-bottom: 0
  }

  #block-webform-client-block-260 {
    padding-top: 140px;
    background: url(img/blog-icon.png);
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: no-repeat;
    background-position: center 0;
    padding-bottom: 0
  }

  #block-webform-client-block-117 {
    padding-top: 140px;
    background: url(img/blog-icon.png);
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: no-repeat;
    background-position: center 0;
    padding-bottom: 0
  }

  .page-node-72 .section-one .section-content h2,
  .page-node-72 .section-two .section-content h2 {
    padding-top: 0;
    background: 0 0
  }

  .page-node-106 .node-page .field-name-body,
  .page-node-107 .node-page .field-name-body,
  .page-node-98 .node-page .field-name-body {
    text-align: left
  }

  .page-node-108 .node-page .field-name-body {
    text-align: left
  }

  .page-node-106 .field-name-body ul,
  .page-node-107 .field-name-body ul,
  .page-node-108 .field-name-body ul {
    margin: 0;
    padding: 0
  }

  .page-node-106 .field-name-body ul li,
  .page-node-107 .field-name-body ul li,
  .page-node-108 .field-name-body ul li {
    list-style: none;
    background: url(img/icons/square-bg.jpg) no-repeat left 10px;
    padding-left: 32px;
    padding-top: 5px;
    padding-bottom: 5px;
    font-size: 16px;
    font-weight: 400;
    text-align: left
  }

  .node-page .field-name-body {
    text-align: center;
    margin-bottom: 40px;
    font-size: 16px;
    color: #3e3d4e
  }

  .node-page .field-name-body h2 {
    font-size: 63px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
  }

  #block-block-43 img {
    margin-top: 25px;
    max-height: 450px
  }

  .page-node-266 .node-page .field-name-body {
    margin-bottom: 0
  }

  .page-node-266 .node-page .field-name-body h2 {
    font-size: 55px
  }

  .page-node-71 .node-page .field-name-body h2 strong {
    font-size: 49px
  }

  .page-node-71 .node-page .field-name-body h3 {
    text-align: left
  }

  .node-page .field-name-body h3 {
    font-size: 21px;
    font-family: sans-serif;
    line-height: 1.6
  }

  .open-sans .node-page .field-name-body h3 {
    font-family: 'Open Sans', sans-serif
  }

  .box-content {
    border-top: 1px solid #d7d7d7;
    background: 0 0;
    padding: 30px 42px;
    text-align: center;
    border-bottom: 5px solid #00c2e5;
    border-left: 1px solid #d7d7d7;
    border-right: 1px solid #d7d7d7;
    font-size: 16px;
    margin-bottom: 30px;
    min-height: 370px
  }

  .box-content.writing-group,
  .box-content.security-group {
    border-bottom: 5px solid #37cea6
  }

  .box-content h4 {
    color: #3e3d4e;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    font-size: 20px;
    text-transform: uppercase
  }

  .box-content h4:before {
    content: "";
    width: 70px;
    height: 70px;
    background: url(img/icons/Install-Your-Theme.png) no-repeat center 0;
    padding: 30px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-bottom: 12px;
    margin-top: 10px
  }

  .writing-group h4:before {
    background: url(img/icons/Content-Writing.png) no-repeat center 0
  }

  .plug-ins-group h4:before {
    background: url(img/icons/Specialist-plug.png) no-repeat center 0
  }

  .seo-group h4:before {
    background: url(img/icons/SEO-Agency.png) no-repeat center 0
  }

  .security-group h4:before {
    background: url(img/icons/Security-%26-Stability.png) no-repeat center 0
  }

  .hosting-group h4:before {
    background: url(img/icons/Hosting.png) no-repeat center 0
  }

  .section-content {
    font-size: 21px;
    color: #3e3d4e
  }

  .section-content h2 {
    color: #3e3d4e;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    font-size: 63px;
    font-weight: 900;
    margin-top: 0
  }

  .page-node-206 .sectiondesc {
    font-size: 21px;
    text-align: left
  }

  .sectionimg img {
    margin-bottom: 35px
  }

  @media (min-width:768px) {
    .process-box-item {
      width: 33.333%
    }

    #backtotop {
      position: fixed;
      right: 20px;
      bottom: 20px;
      width: 50px;
      height: 50px;
      display: none;
      -webkit-border-radius: 100%;
      -moz-border-radius: 100%;
      border-radius: 100%;
      text-align: center;
      font-size: 20px;
      color: #37cea6;
      z-index: 99;
      border: 2px solid #37cea6;
      line-height: 45px
    }

    .bottom-box-content,
    .section-two,
    .section-one {
      padding-top: 135px;
      background: url(img/blog-icon.png);
      background-repeat: repeat;
      background-position-x: 0%;
      background-position-y: 0%;
      background-repeat: repeat;
      background-position-x: 0%;
      background-position-y: 0%;
      background-repeat: no-repeat;
      background-position: center 0;
      padding-bottom: 40px;
      clear: both;
      overflow: hidden
    }

    .section-one .section-content h2 {
      background: url(img/icons/Philosophy-icon.png);
      background-repeat: repeat;
      background-position-x: 0%;
      background-position-y: 0%;
      background-repeat: no-repeat;
      background-position: left top;
      padding-top: 100px;
      text-align: left
    }

    .section-two .section-content h2 {
      background: url(img/icons/Mission-icon.png);
      background-repeat: repeat;
      background-position-x: 0%;
      background-position-y: 0%;
      background-repeat: repeat;
      background-position-x: 0%;
      background-position-y: 0%;
      background-repeat: no-repeat;
      background-position: right top;
      padding-top: 100px;
      text-align: right
    }

    .videowrapper {
      float: right;
      padding-left: 45px;
      margin-top: 20px
    }
  }

  @media (min-width:991px) {
    .ourblogs .view-header {
      width: 33.33333333%;
      float: left;
      position: relative;
      min-height: 1px;
      padding-right: 15px;
      padding-left: 15px
    }

    #block-block-4 h3,
    .ourblogs h3 {
      font-size: 103px
    }

    .process-box-item {
      width: 20%
    }

    .dropdown-submenu {
      position: relative
    }

    .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -46px;
      margin-left: -1px;
      border-top: 0
    }

    .dropdown-submenu:hover>.dropdown-menu {
      display: block
    }

    .dropdown-submenu>a:after {
      display: block;
      content: " ";
      float: right;
      width: 0;
      height: 0;
      border-color: transparent;
      border-style: solid;
      border-width: 5px 0 5px 5px;
      border-left-color: #ccc;
      margin-top: 5px;
      margin-right: -10px
    }

    .dropdown-submenu:hover>a:after {
      border-left-color: #fff
    }

    .dropdown-submenu.pull-left {
      float: none
    }

    .dropdown-submenu.pull-left>.dropdown-menu {
      left: -100%;
      margin-left: 10px;
      -webkit-border-radius: 6px 0 6px 6px;
      -moz-border-radius: 6px 0 6px 6px;
      border-radius: 6px 0 6px 6px
    }

    .navbar-nav>li.dropdown:hover .dropdown-menu {
      display: block;
      visibility: visible;
      opacity: 1
    }

    .navbar-nav>li.dropdown:hover .dropdown-menu {
      display: block;
      visibility: visible;
      opacity: 1;
      filter: alpha(opacity=100);
      top: 99%;
      -webkit-transform: rotateX(0);
      -moz-transform: rotateX(0);
      -ms-transform: rotateX(0);
      -o-transform: rotateX(0);
      transform: rotateX(0)
    }

    .dropdown-submenu:hover>.dropdown-menu {
      display: block !important
    }

    .dropdown-submenu .dropdown-menu {
      display: none !important
    }

    .dropdown-menu {
      display: block !important;
      position: absolute;
      min-width: 250px;
      background-color: #fff;
      border-top: 5px solid #0cc;
      z-index: 999;
      left: 0;
      padding: 0;
      visibility: hidden;
      opacity: 0;
      filter: alpha(opacity=0);
      -webkit-transition: all .2s ease-out;
      -o-transition: all .2s ease-out;
      transition: all .2s ease-out;
      -moz-transition: all .2s ease-out;
      -ms-transition: all .2s ease-out;
      -webkit-box-shadow: 0 4px 4px 1px rgba(0, 0, 0, .2);
      box-shadow: 0 4px 4px 1px rgba(0, 0, 0, .2);
      -webkit-transform: rotateX(-90deg);
      -moz-transform: rotateX(-90deg);
      -ms-transform: rotateX(-90deg);
      -o-transform: rotateX(-90deg);
      transform: rotateX(-90deg);
      -webkit-transform-origin: 0 0;
      -moz-transform-origin: 0 0;
      -ms-transform-origin: 0 0;
      -o-transform-origin: 0 0;
      transform-origin: 0 0;
      border-radius: 0
    }

    .hp-blogs {
      min-height: 480px
    }
  }

  .our-process-title h2 {
    font-size: 63px;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    margin-top: 55px;
    margin-bottom: 35px;
    text-align: center
  }

  .our-process-title h2:after {
    content: "";
    width: 100%;
    display: block;
    border-bottom: 1px solid #d8d8d8;
    margin-left: auto;
    margin-right: auto;
    max-width: 375px;
    margin-top: 5px
  }

  .rwd-media {
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 56.25%;
    margin: 15px 0
  }

  .rwd-media iframe,
  .rwd-media video {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0
  }

  .page-node-205 .section-two .section-content {
    text-align: left
  }

  .section-two .section-content {
    text-align: right
  }

  .box-content.design-group h2 {
    background: url(img/icons/design-group-icon.png) no-repeat center top;
    padding-top: 70px;
    margin-top: 0
  }

  .box-content.development-group h2 {
    background: url(img/icons/development-group-icon.png) no-repeat center top;
    padding-top: 70px;
    margin-top: 0
  }

  .contactaddmap {
    clear: both;
    overflow: hidden;
    background: #ededed;
    padding: 45px 0
  }

  .contactmap {
    border: 1px solid #37cea6;
    margin: 0;
    padding: 0
  }

  .contactsmap {
    padding-right: 0
  }

  .addbox-content-wrap h4 {
    color: #3e3d4e;
    font-size: 20px;
    text-transform: uppercase
  }

  .addbox-content-wrap {
    clear: both;
    overflow: hidden;
    padding-top: 0;
    padding-bottom: 0
  }

  .addbox-content-wrap a {
    color: #222
  }

  .webform-client-form .panel-default {
    border: none;
    padding: 0;
    border-radius: 0;
    box-shadow: unset
  }

  .webform-client-form .form-control {
    background: #ebebeb;
    border: none;
    box-shadow: none;
    border-radius: 0;
    height: 46px
  }

  .webform-client-form .form-group {
    margin-bottom: 10px
  }

  .webform-client-form .form-control.form-textarea {
    height: auto;
    min-height: 158px
  }

  .webform-client-form .panel-body {
    padding: 0 15px
  }

  .webform-client-form .form-actions {
    text-align: center
  }

  .webform-client-form .form-actions .form-submit {
    text-align: center;
    background: #f19830;
    border: none;
    border-radius: 0;
    font-size: 18px;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    text-transform: uppercase;
    padding: 7px 20px;
    color: #fff
  }

  .page-node-96 .section-one .section-content h2 {
    background: 0 0;
    padding: 0
  }

  .page-node-96 .section-two .section-content h2 {
    background: 0 0;
    padding: 0;
    text-align: left
  }

  .page-node-96 .section-two .section-content {
    text-align: left
  }

  .sectiondesc ul {
    margin: 0;
    padding: 0
  }

  .sectiondesc ul li {
    list-style: none;
    background: url(img/icons/square-bg.jpg) no-repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-position-x: 0%;
    background-position-y: 0%;
    background-position: left 16px;
    padding-left: 32px;
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 18px;
    font-weight: 400;
    text-align: left
  }

  .page-node-71 #block-views-full-width-content-block {
    background: 0 0;
    padding: 0
  }

  .bottom-box-content {
    text-align: center;
    font-size: 20px
  }

  .bottom-box-content .titlebottom {
    font-size: 63px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    margin-bottom: 35px;
    text-align: center;
    background: url(img/titleborderbg.png) no-repeat center bottom;
    padding-bottom: 20px
  }

  .page-node-96 .box-content {
    background: 0 0
  }

  .page-node-96 .box-content h2 {
    color: #3e3d4e;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    font-size: 19px;
    font-weight: 900;
    text-transform: uppercase;
    padding-top: 82px;
    margin-top: 0
  }

  .box-content.programming-group {
    border-bottom: 5px solid #37cea6
  }

  .box-content.template-group h2 {
    background: url(img/icons/teplate-development.png) no-repeat center top
  }

  .box-content.programming-group h2 {
    background: url(img/icons/custom-cms-programing.png) no-repeat center top
  }

  .box-content.migrations-group h2 {
    background: url(img/icons/migration.png) no-repeat center top
  }

  .page-node-103 .section-two .section-content {
    text-align: center
  }

  .page-node-103 .section-two .section-content a {
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
  }

  .page-node-103 .section-one .section-content h2 {
    background: url(img/icons/Drupal.png) no-repeat left top
  }

  .page-node-95 .section-one .section-content h2 {
    background: 0 0;
    padding: 0
  }

  .page-node-95 .section-two .section-content h2 {
    background: 0 0;
    padding: 0;
    text-align: left;
    font-size: 47px
  }

  .page-node-95 .section-two .section-content {
    text-align: left
  }

  .page-node-111 .field-name-field-full-width-top h2 {
    font-size: 63px;
    font-family: 'Poppins', sans-serif;
    font-weight: 800
  }

  .page-node-111 .field-name-field-full-width-top {
    font-size: 18px
  }

  .page-node-111 .section-one .section-content h2 {
    background: 0 0;
    padding: 0;
    font-size: 39px
  }

  .page-node-111 .section-two .section-content h2 {
    background: 0 0;
    padding: 0;
    font-size: 39px;
    text-align: left
  }

  #block-views-full-width-content-block {
    background: url(img/blog-icon.png) no-repeat center top #ebebeb;
    padding-top: 75px;
    padding-bottom: 90px;
    clear: both;
    text-align: center
  }

  .our-process-box h4 {
    font-size: 18px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    text-transform: uppercase;
    text-align: center
  }

  .our-process-box h4:before {
    content: "";
    width: 74px;
    height: 74px;
    display: block;
    background: url(img/icons/Responsive-Web-Design.png) no-repeat center 0;
    margin: 7px auto
  }

  .full-width-content-block-92.container {
    width: 100%;
    max-width: 100%;
    padding: 0
  }

  .page-node-92 #block-views-full-width-content-block {
    background-color: #fff;
    padding-bottom: 0
  }

  .sectiondesc {
    font-size: 21px
  }

  .page-node-92 #block-views-full-width-content-bottom-block {
    background: url(img/small-big-hang.png) no-repeat center 0;
    padding-top: 100px
  }

  .full-width-content-block-92 h2 {
    font-size: 63px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    margin-top: 55px;
    margin-bottom: 35px;
    text-align: center;
    background: url(img/titleborderbg.png) no-repeat center bottom;
    padding-bottom: 35px
  }

  .view-portfolio .portfolio-item {
    padding: 10px
  }

  .buy-process-wrap {
    background: #fff;
    position: relative;
    padding-bottom: 100px
  }

  .buy-process-wrap:before {
    content: '';
    position: absolute;
    top: 202px;
    left: 0;
    width: 100%;
    height: 39px;
    background-color: #00c2e5;
    color: #fff
  }

  .buy-process-items {
    display: table;
    margin: auto;
    overflow: visible
  }

  .buy-process-items {
    width: 1186px
  }

  .buy-process-item {
    display: table-cell;
    position: relative;
    text-align: center;
    height: 456px;
    margin: 0 6px
  }

  .buy-process-item:nth-child(2n+1) .text-wrap,
  .buy-process-item:nth-child(2n) .icon-wrapper {
    position: absolute;
    top: 2px;
    left: 0;
    right: 0;
    height: 200px;
    text-align: center
  }

  .buy-process-item h4 {
    font-size: 16px;
    color: #3e3d4e;
    text-transform: uppercase;
    position: absolute;
    width: 100%;
    margin-bottom: 0;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
  }

  .buy-process-item:nth-child(2n+1) h4 {
    bottom: 22px
  }

  .buy-process-item p {
    position: absolute;
    font-size: 15px;
    color: #3e3d4e;
    margin-bottom: 0;
    width: 100%;
    line-height: 1.6;
    padding: 10px
  }

  .buy-process-item:nth-child(2n+1) p {
    bottom: 56px
  }

  .buy-process-item span {
    position: absolute;
    top: 201px;
    left: 50%;
    transform: translate(-50%);
    -webkit-transform: translate(-50%);
    font-size: 25px;
    color: rgba(255, 255, 255, .65);
    font-weight: 600
  }

  .buy-process-item:nth-child(2n+1) .icon-wrapper,
  .buy-process-item:nth-child(2n) .text-wrap {
    position: absolute;
    bottom: 15px;
    left: 0;
    right: 0;
    height: 200px
  }

  .buy-process-item .icon-wrapper:before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 6px;
    background-color: #00c2e5;
    transform: translate(-50%, 0);
    -webkit-transform: translate(-50%, 0)
  }

  .buy-process-item i {
    position: absolute;
    left: 50%;
    transform: translate(-50%, 0);
    -webkit-transform: translate(-50%, 0);
    width: 90px;
    height: 90px;
    font-size: 40px;
    color: #fff;
    border-radius: 50%;
    background-color: #00c2e5
  }

  .buy-process-item:nth-child(2n+1) i {
    bottom: 0
  }

  .buy-process-item:nth-child(2n) h4 {
    top: 22px
  }

  .buy-process-item:nth-child(2n) p {
    top: 56px
  }

  .buy-process-item i:before {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%)
  }

  .text-wrap {
    background: #fff;
    -webkit-box-shadow: 0px 0px 30px -1px rgba(0, 0, 0, .2);
    -moz-box-shadow: 0px 0px 30px -1px rgba(0, 0, 0, .2);
    box-shadow: 0px 0px 30px -1px rgba(0, 0, 0, .2);
    margin: -8% auto;
    height: auto
  }

  .full-width-content-block-76.container {
    max-width: 100%;
    padding: 0
  }

  .full-width-content-block-76 h2 {
    font-size: 63px;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    margin-top: 55px;
    margin-bottom: 35px;
    text-align: center
  }

  .full-width-content-block-76 h2:after {
    content: "";
    width: 100%;
    display: block;
    border-bottom: 1px solid #d8d8d8;
    margin-left: auto;
    margin-right: auto;
    max-width: 375px;
    margin-top: 5px
  }

  .page-node-104 .descriptionsbottom {
    text-align: center
  }

  .page-node-104 .field-name-field-full-width-top {
    padding-top: 135px;
    background: url(img/blog-icon.png);
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: no-repeat;
    background-position: center 0;
    padding-bottom: 45px;
    clear: both;
    overflow: hidden
  }

  .training-box {
    text-align: center;
    padding: 20px;
    box-shadow: 0 2px 40px 0 rgba(0, 0, 0, .1);
    min-height: 350px
  }

  .training-box h4 {
    font-size: 16px;
    color: #3e3d4e;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    display: block;
    min-height: 38px;
    text-transform: uppercase;
    margin: 7px 0
  }

  .training-box h4:before {
    content: "";
    width: 70px;
    height: 70px;
    background: url(img/icons/design-group-icon.png) no-repeat center 0;
    padding: 30px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-bottom: 12px;
    margin-top: 10px
  }

  .training-process.row {
    padding-top: 20px
  }

  .training-process-box {
    border-top: 1px solid #d7d7d7;
    background: 0 0;
    padding: 30px 42px;
    text-align: center;
    border-bottom: 5px solid #00c2e5;
    border-left: 1px solid #d7d7d7;
    border-right: 1px solid #d7d7d7;
    font-size: 16px;
    margin-bottom: 30px;
    min-height: 318px
  }

  .training-process-box h4 {
    font-size: 20px;
    color: #3e3d4e;
    font-family: 'Poppins', sans-serif;
    font-weight: 300;
    display: block;
    min-height: 38px;
    text-transform: uppercase;
    margin: 7px 0
  }

  .training-process-box h4:before {
    content: "";
    width: 70px;
    height: 70px;
    background: url(img/icons/design-group-icon.png) no-repeat center 0;
    padding: 30px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-bottom: 12px;
    margin-top: 10px
  }

  .contact-row {
    padding: 25px 5px 25px 65px
  }

  .contact-row.sales {
    background: url(img/mobile-bg.png) no-repeat left center
  }

  .contact-row.email {
    background: url(img/email-us.png) no-repeat left center
  }

  .contact-row.add {
    background: url(img/loc-map.png) no-repeat left center
  }

  .contact-row .lb {
    color: #2dc0f0;
    font-size: 18px;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
  }

  .contact-row .val a,
  .contact-row .val {
    font-size: 14px;
    color: #222;
  }

  .footer-copyright {
    text-align: center;
    background: #222;
    color: #fff;
    padding: 12px
  }

  .showmoreinfo {
    display: none
  }

  .showmoreinfobtn {
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    background: url(img/read-more-arrow.png) no-repeat 155px center #00c2e5;
    color: #fff;
    display: inline-block;
    text-align: center;
    font-size: 23px;
    font-weight: 800;
    border-radius: 60px;
    padding: 7px 35px 8px 20px;
    cursor: pointer
  }

  .showmoreinfobtn:hover {
    background: url(img/read-more-arrow.png) no-repeat 155px center #3e3d4e;
    color: #fff
  }

  .hidemoreinfobtn {
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    background: url(img/read-more-up-arrow.png) no-repeat 140px center #00c2e5;
    color: #fff;
    display: inline-block;
    text-align: center;
    font-size: 23px;
    font-weight: 800;
    border-radius: 60px;
    padding: 7px 35px 8px 20px;
    cursor: pointer
  }

  .hidemoreinfobtn:hover {
    background: url(img/read-more-up-arrow.png) no-repeat 140px center #3e3d4e;
    color: #fff
  }

  .page-node-212 .content_below {
    background: url(img/smile-bg-1.png) no-repeat center 0 #f2f2f2;
    padding: 165px 0 75px
  }

  #block-block-22 h2 {
    color: #3e3d4e;
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    font-size: 36px;
    text-align: center;
    margin-top: 0;
    margin-bottom: 25px
  }

  .page-node-212 .field-name-body h2 {
    font-size: 36px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    text-align: left;
    background: url(img/SEO-icon-1.png) no-repeat left 0;
    padding-top: 100px
  }

  .page-node-212 .field-name-body h2:after {
    content: "";
    display: block;
    border-bottom: 7px solid #00c2e5;
    width: 115px;
    padding-top: 20px
  }

  .page-node-212 .field-name-field-full-width-top {
    font-size: 21px;
    padding: 30px 0;
    display: block;
    margin: 20px 0;
    clear: both;
    width: 100%;
    overflow: hidden
  }

  .seo_reviews:before {
    background: url(img/SEO-Packages-smile.png) no-repeat center top;
    content: "";
    display: block;
    position: relative;
    padding-top: 130px
  }

  .seo_reviews {
    background: url(img/google-review.jpg) no-repeat;
    background-size: auto;
    background-size: auto;
    background-size: cover;
    padding-top: 0;
    padding-bottom: 60px
  }

  .seo-reviews-title h2 {
    color: #fff;
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    font-size: 36px
  }

  .seo-reviews-title h2 span {
    font-weight: 700;
    font-size: 36px
  }

  .seo-reviews-title h3 {
    color: #fff;
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    font-size: 36px;
    line-height: 1
  }

  .seo-reviews-title {
    font-size: 25px;
    color: #fff
  }

  .seo-reviews-block {
    padding: 20px;
    text-align: center
  }

  .view-reviews-of-our-seo-services {
    color: #3e3d4e;
    font-size: 16px;
    text-align: center;
    padding: 30px 0
  }

  .view-reviews-of-our-seo-services .views-field-field-image {
    text-align: center
  }

  .view-reviews-of-our-seo-services .views-field-field-image img {
    max-width: 80px;
    border-radius: 100%;
    display: inline-block;
    margin-bottom: 10px
  }

  .view-reviews-of-our-seo-services .views-field.views-field-title h4.field-content {
    color: #3e3d4e;
    margin-bottom: 5px;
    text-align: center
  }

  .view-reviews-of-our-seo-services .views-field.views-field-field-designation .field-content {
    text-align: center;
    color: #3e3d4e;
    font-size: 15px;
    font-weight: 400
  }

  .field-content.round-name-text {
    font-weight: 800;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    padding: 0;
    background: #00c2e5;
    display: inline-block;
    color: #fff;
    font-size: 55px;
    width: 85px;
    height: 85px;
    line-height: 85px;
    border-radius: 55px;
    margin-bottom: 20px
  }

  .seo_infographics {
    margin: 65px auto;
    clear: both;
    text-align: center
  }

  .seo-package {
    background: #3e3d4e;
    color: #fff;
    padding: 25px;
    border-radius: 8px;
    margin-bottom: 20px
  }

  .seo-package.national-seo-package {
    background: url(img/Local-SEO-Packages-item.png) no-repeat;
    background-size: auto;
    background-size: cover
  }

  .seo-package h3 {
    color: #fff;
    text-align: center;
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    font-size: 28px
  }

  .seo-package h3:after {
    content: "";
    display: block;
    border-bottom: 5px solid #00c2e5;
    margin: 20px auto;
    width: 85px
  }

  .seo-package.national-seo-package h3:after {
    content: "";
    display: block;
    border-bottom: 5px solid #fff;
    margin: 20px auto;
    width: 85px
  }

  .seo-package ul {
    padding: 0;
    margin: 0;
    display: block;
    min-height: 500px
  }

  .seo-package ul li {
    list-style: none;
    padding: 10px 0 10px 15px;
    position: relative;
    border-bottom: 1px solid #fff;
    font-size: 14px
  }

  .seo-package ul li:before {
    content: "\f0da";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    left: 0
  }

  .seo-package p a {
    border-radius: 35px;
    padding: 5px 10px;
    color: #fff;
    background: #37cea6;
    text-align: center;
    font-size: 18px;
    font-weight: 900;
    margin: 20px auto;
    max-width: 200px;
    -webkit-transition: all .35s;
    -o-transition: all .35s;
    transition: all .35s;
    -moz-transition: all .35s;
    -ms-transition: all .35s;
    display: block
  }

  .seo-package.national-seo-package p a {
    background: #3e3d4e
  }

  .content_cta {
    background: url(img/sub-banner.jpg) no-repeat;
    background-size: auto;
    background-size: cover;
    padding-top: 25px;
    padding-bottom: 25px;
    text-align: center
  }

  .seo_infotexts {
    background: url(img/smile-bg-1.png) no-repeat #fff;
    background-position-x: 0%;
    background-position-y: 0%;
    background-position: center 0;
    padding: 140px 0 90px;
    border-top: 1px solid #fff
  }

  #block-block-28 {
    font-size: 21px
  }

  #block-block-28 h2 {
    color: #3e3d4e;
    text-align: center;
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    font-size: 42px
  }

  #block-block-28 ul {
    padding: 0;
    margin: 0
  }

  #block-block-28 ul li {
    list-style: none;
    padding: 10px 0 10px 15px;
    position: relative
  }

  #block-block-28 ul li:before {
    content: "\f0da";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    left: 0
  }

  .our_accreditations {
    background: url(img/smile-bg-1.png) no-repeat #ebebeb;
    background-position-x: 0%;
    background-position-y: 0%;
    background-position: center 0;
    padding: 140px 0 90px;
    border-top: 1px solid #fff
  }

  .seo-faq-section {
    background: url(img/smile-bg-1.png) no-repeat #fff;
    background-position-x: 0%;
    background-position-y: 0%;
    background-position: center 0;
    padding: 140px 0 90px
  }

  #block-block-29 {
    margin-top: 60px;
    clear: both
  }

  #block-block-29 h2 {
    color: #37cea6;
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
    font-size: 36px;
    line-height: 1;
    margin-top: 50px
  }

  #block-block-29 p a {
    font-weight: 800;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    background: #00c2e5;
    color: #fff;
    display: inline-block;
    text-align: center;
    font-size: 23px;
    border-radius: 60px;
    padding: 7px 25px;
    margin-bottom: 20px
  }

  #block-block-23 h2 {
    color: #3e3d4e;
    text-align: center;
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    font-size: 36px
  }

  #block-block-23 p a {
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    background: #00c2e5;
    color: #fff;
    display: inline-block;
    text-align: center;
    font-size: 17px;
    border-radius: 60px;
    padding: 7px 25px;
    margin-bottom: 20px
  }

  #block-block-23 p a:hover {
    background: #3e3d4e;
    color: #fff
  }

  #block-block-24 {
    text-align: center
  }

  #block-block-24 h2 {
    color: #3e3d4e;
    text-align: center;
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    font-size: 36px
  }

  .accereditation-logo {
    display: inline-block;
    width: 230px;
    padding: 10px
  }

  #block-block-25 h2.block-title {
    color: #3e3d4e;
    text-align: center;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    font-size: 36px;
    background: url(img/titleborderbg.png) no-repeat center bottom;
    padding-bottom: 25px;
    margin-bottom: 30px
  }

  .page-node-213 .content_below {
    background: url(img/smile-bg-1.png) no-repeat center 0 #f2f2f2;
    padding: 165px 0 75px
  }

  .page-node-213 .field-name-body h2 {
    font-size: 36px;
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
    text-align: left;
    background: url(img/SEO-icon-1.png) no-repeat left 0;
    padding-top: 100px
  }

  .page-node-213 .field-name-body h2:after {
    content: "";
    display: block;
    border-bottom: 7px solid #00c2e5;
    width: 115px;
    padding-top: 20px
  }

  .page-node-213 .field-name-field-full-width-top {
    font-size: 21px;
    padding: 30px 0;
    display: block;
    margin: 20px 0;
    clear: both;
    width: 100%;
    overflow: hidden
  }

  .page-node-214 .content_below {
    background: url(img/smile-bg-1.png) no-repeat center 0 #f2f2f2;
    padding: 165px 0 75px
  }

  .page-node-214 .field-name-body h2 {
    font-size: 36px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    ;
    text-align: left;
    background: url(img/SEO-icon-1.png) no-repeat left 0;
    padding-top: 100px
  }

  .page-node-214 .field-name-body h2:after {
    content: "";
    display: block;
    border-bottom: 7px solid #00c2e5;
    width: 115px;
    padding-top: 20px
  }

  .page-node-214 .field-name-field-full-width-top {
    font-size: 21px;
    padding: 30px 0;
    display: block;
    margin: 20px 0;
    clear: both;
    width: 100%;
    overflow: hidden
  }

  .page-node-71 .section-one {
    background: 0 0;
    padding: 0
  }

  .page-node-71 .field-name-body h2 {
    font-size: 36px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    ;
    text-align: left;
    background: url(img/SEO-icon-1.png) no-repeat left 0;
    padding-top: 100px
  }

  .page-node-71 .field-name-body h2:after {
    content: "";
    display: block;
    border-bottom: 7px solid #00c2e5;
    width: 115px;
    padding-top: 20px
  }

  .page-node-71 .field-name-field-full-width-top {
    font-size: 21px;
    padding: 30px 0;
    display: block;
    margin: 20px 0;
    clear: both;
    width: 100%;
    overflow: hidden
  }

  .page-node-71 .content_below {
    background: url(img/smile-bg-1.png) no-repeat center 0 #f2f2f2;
    padding: 165px 0 75px
  }

  #block-block-31 {
    font-size: 21px
  }

  #block-block-31 h2.block-title {
    font-size: 36px;
    text-align: center
  }

  #block-block-31 h2 {
    color: #3e3d4e;
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    ;
    font-size: 36px;
    padding-bottom: 25px;
    margin-bottom: 30px
  }

  #block-block-30 h2.block-title {
    color: #3e3d4e;
    text-align: center;
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    ;
    font-size: 42px;
    background: url(img/titleborderbg.png) no-repeat center bottom;
    padding-bottom: 25px;
    margin-bottom: 30px
  }

  #block-block-32 {
    padding-top: 60px;
    text-align: center
  }

  #block-block-26 {
    text-align: center
  }

  #block-block-33 {
    font-size: 21px
  }

  #block-block-33 h2 {
    text-align: center
  }

  #block-block-33 img {
    display: inline-block;
    padding: 30px
  }

  #block-views-front-portfolio-block-2 .bx-controls,
  .page-node-67 #block-views-front-portfolio-block .bx-controls {
    max-width: 100%;
    position: absolute;
    margin: 0;
    top: -70px;
    left: 0;
    width: 100%
  }

  #block-views-front-portfolio-block-2 .bx-controls-direction,
  .page-node-67 #block-views-front-portfolio-block .bx-controls-direction {
    width: 160px;
    margin: 0 auto;
    position: relative
  }

  #block-views-front-portfolio-block-2 .bx-wrapper .bx-controls-direction a,
  .page-node-67 #block-views-front-portfolio-block .bx-wrapper .bx-controls-direction a {
    top: 0;
    bottom: 100%
  }

  #block-views-front-portfolio-block-2 .bx-controls {
    max-width: 100%;
    position: absolute;
    margin: 0;
    top: -35px;
    left: 0;
    width: 100%
  }

  #block-views-front-portfolio-block-2 .bx-controls-direction {
    width: 160px;
    margin: 0 auto;
    position: relative
  }

  #block-views-front-portfolio-block-2 .bx-wrapper .bx-controls-direction a {
    top: 0;
    bottom: 100%
  }

  #block-views-full-width-content-bottom-block {
    clear: both;
    margin: 65px auto;
    width: 100%
  }

  #block-block-35 h2.block-title {
    color: #3e3d4e;
    text-align: center;
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    ;
    font-size: 42px;
    background: url(img/titleborderbg.png) no-repeat center bottom;
    padding-bottom: 25px;
    margin-bottom: 30px
  }

  .content-top-middle {
    background: url(img/background.jpg) top center repeat-x;
    background-size: auto auto;
    background-size: cover;
    padding-bottom: 25px;
    padding-top: 45px
  }

  #block-block-42 {
    text-align: center
  }

  .banner-head {
    color: #fff;
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    ;
    font-size: 36px;
    margin: 20px 0
  }

  .banner-head span {
    font-size: 24px;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
  }

  #google_recaptcha_webform_client_form_260 {
    clear: both;
    margin-bottom: 15px
  }

  #block-block-40,
  #block-block-43 {
    font-size: 18px;
    font-family: sans-serif;
    font-weight: 400
  }

  .open-sans #block-block-40,
  .open-sans #block-block-43 {
    font-family: 'Open Sans', sans-serif
  }

  #block-block-40 h2,
  #block-block-43 h2 {
    color: #3e3d4e;
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    ;
    font-size: 36px;
    margin: 20px 0
  }

  .page-node-266 .node-page .field-name-body h2 {
    display: none
  }

  @media (min-width:768px) {
    .page-node-266 .node-page .field-name-body h2 {
      display: block
    }

    #block-block-43 h2 {
      display: none
    }

    #block-block-40 h2,
    #block-block-43 h2 {
      font-size: 43px;
      margin-top: 0
    }

    #block-block-42 {
      text-align: left
    }

    .banner-head {
      font-size: 49px;
      line-height: 55px
    }

    .contactsmap .webform-client-form .first_name.form-item {
      float: left;
      width: 50%;
      padding-right: 15px;
      margin: 0
    }

    .contactsmap .webform-client-form .last_name.form-item {
      float: left;
      width: 50%;
      padding-left: 15px;
      margin: 0
    }

    .contactsmap .webform-client-form .field_email {
      clear: both;
      overflow: hidden;
      margin: 0
    }

    #block-block-23 p a {
      font-size: 23px
    }

    #block-block-22 h2 {
      font-size: 63px
    }

    #block-block-28 h2 {
      font-size: 63px
    }

    .seo-reviews-title h2 {
      font-size: 86px
    }

    .seo-reviews-title h3 {
      font-size: 70px
    }

    .page-node-212 .field-name-body h2 {
      font-size: 63px
    }

    #block-block-29 h2 {
      font-size: 80px
    }

    #block-block-24 h2 {
      font-size: 63px
    }

    #block-block-25 h2.block-title {
      font-size: 63px
    }

    #block-block-30 h2.block-title {
      font-size: 63px
    }

    #block-block-35 h2.block-title {
      font-size: 63px
    }

    #block-block-31 h2 {
      font-size: 63px
    }

    #block-block-31 h2.block-title {
      font-size: 80px
    }

    #block-block-31 img {
      float: right;
      max-width: 50%;
      margin-left: 35px
    }

    #block-block-28 img {
      max-width: 50%;
      float: left;
      margin-right: 30px
    }

    .page-node-71 .field-name-body h2 {
      font-size: 63px
    }

    .page-node-214 .field-name-body h2 {
      font-size: 63px
    }

    .page-node-213 .field-name-body h2 {
      font-size: 63px
    }

    .seo-package h3 {
      font-size: 34px
    }
  }

  @media (min-width:992px) {
    .addbox-content-wrap.london-office {
      border-left: 1px solid #c3c3c8;
      padding-left: 32px
    }

    .seo-reviews-block {
      background: url(img/SEO-Packages-round.png) no-repeat center top;
      padding: 120px;
      text-align: center
    }

    .view-front-portfolio .bx-viewport {
      height: auto !important
    }
  }

  @media only screen and (max-width:991px) {
    .seo-reviews-block {
      color: #fff
    }

    .view-reviews-of-our-seo-services {
      color: #fff
    }

    .view-reviews-of-our-seo-services .views-field.views-field-title h4.field-content {
      color: #fff
    }

    .view-reviews-of-our-seo-services .views-field.views-field-field-designation .field-content {
      color: #fff
    }

    .seo_reviews {
      text-align: center
    }
  }

  @media only screen and (min-width:1281px) {
    .buy-process-items {
      width: 1186px
    }

    .buy-process-item h4 {
      font-size: 18px
    }

    .buy-process-item.featured:nth-child(odd) .text-wrap:before,
    .buy-process-item.featured:nth-child(even) .text-wrap:before {
      content: '';
      position: absolute;
      width: 180%;
      height: 133%;
      background-color: #fff
    }

    .buy-process-item.featured:nth-child(odd) .text-wrap:before {
      top: -33%;
      left: -40%;
      -moz-border-radius: 1000px 1000px 0 0;
      -webkit-border-radius: 1000px 1000px 0 0;
      border-radius: 1000px 1000px 0 0
    }

    .buy-process-item.featured:nth-child(even) .text-wrap:before {
      bottom: -33%;
      left: -40%;
      -moz-border-radius: 0 0 1000px 1000px;
      -webkit-border-radius: 0 0 1000px 1000px;
      border-radius: 0 0 1000px 1000px
    }
  }

  @media only screen and (min-width:961px) and (max-width:1280px) {
    .buy-process-items {
      width: 920px
    }

    .buy-process-item h4 {
      font-size: 15px
    }

    .buy-process-item p {
      font-size: 12px
    }
  }

  @media only screen and (max-width:960px) {
    .buy-process-items {
      width: 100%
    }
  }

  @media only screen and (max-width:767px) {
    .res-view-row.res-view-row-1 {
      background-size: 100% !important
    }

    .page-node-67 .frontportfolio {
      padding-top: 85px;
      padding-bottom: 0
    }

    .page-node-67 #block-views-front-portfolio-block .bx-controls {
      top: -45px
    }

    .page-node-67 #block-views-front-portfolio-block .bx-controls-direction {
      width: 120px
    }

    .view-front-portfolio .bx-controls {
      margin: 10px auto
    }

    .front .view-front-portfolio .view-footer {
      margin-top: 85px
    }
  }

  @media only screen and (max-width:767px) {
    .page-node-103 .section-one .section-content h2 {
      background: url(img/icons/Drupal.png) no-repeat center top;
      padding-top: 100px
    }

    .buy-process-items {
      display: block
    }

    .buy-process-wrap:before,
    #process-wrap .buy-process-item .text-wrap,
    #process-wrap .buy-process-item .icon-wrapper {
      position: static;
      height: auto
    }

    #process-wrap .buy-process-item span {
      top: 80px;
      font-size: 150px;
      color: #00c2e5;
      opacity: .12
    }

    .buy-process-item {
      display: block;
      height: auto;
      padding: 115px 20px 60px;
      overflow: hidden
    }

    .buy-process-item .icon-wrapper:before,
    .buy-process-item h4,
    .buy-process-item p {
      position: static;
      margin-bottom: 10px
    }

    #process-wrap .buy-process-item i {
      top: 0
    }

    .buy-process-item p {
      padding-left: 7%;
      padding-right: 7%
    }

    .videowrapper {
      float: none;
      clear: both;
      width: 100%;
      position: relative;
      padding-bottom: 56.25%;
      padding-top: 25px;
      height: 0
    }

    .videowrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%
    }
  }

  #block-views-choice-tips-block {
    background: url(img/blog-icon.png);
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    padding-top: 155px;
    background-position: top center;
    background-repeat: no-repeat
  }

  .node-choice-tips .field-name-field-upload-video {
    margin-bottom: 25px
  }

  .view-choice-tips h3 {
    font-size: 20px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    ;
    display: block;
    min-height: 72px
  }

  .view-choice-tips .views-field-field-upload-video {
    position: relative
  }

  .view-choice-tips .youtube-field-player:after {
    display: block;
    content: "";
    background: url(img/icons/youtube64.png) no-repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-size: auto;
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background-size: 38px;
    background-position: center center;
    z-index: 99
  }

  .blog-details-page .pagetitle h2 {
    font-weight: 900;
    text-align: center;
    font-size: 63px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
  }

  .blog-cat-date {
    text-align: center;
    overflow: hidden
  }

  .blog-cat .field-item {
    display: inline-block;
    padding: 0 12px;
    border-right: 2px solid #3e3d4e;
    line-height: 18px
  }

  .blog-cat {
    display: inline-block;
    text-align: center;
    overflow: hidden;
    font-size: 21px;
    font-family: open sans;
    color: #3e3d4e;
    padding-left: 12px
  }

  .blog-cat a {
    color: #3e3d4e
  }

  .blog-author-name {
    text-align: center;
    margin: 15px 0 10px;
    background: url(img/blog-icon.png) no-repeat center 0;
    padding-top: 105px
  }

  .blog-author-name a {
    font-size: 20px;
    color: #2dc0f0;
    font-weight: 900;
    position: relative;
    padding-left: 20px
  }

  .blog-author-name a:before {
    content: "";
    width: 10px;
    height: 2px;
    position: absolute;
    left: 0;
    border-bottom: 3px solid;
    top: 13px
  }

  .blogdescription {
    font-size: 21px;
    text-align: left
  }

  .blogbottomcontent {
    font-size: 21px;
    margin-top: 32px;
    border-top: 1px solid #ddd;
    padding-top: 25px;
    text-align: center
  }

  .field-blog-tags {
    margin-top: 30px;
    border-top: 1px solid #ddd;
    padding-top: 30px
  }

  #block-views-our-blog-block-2 h2.block-title {
    font-weight: 900;
    text-align: center;
    font-size: 26px;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    position: relative;
    background: url(img/titleborderbg.png) no-repeat center bottom;
    padding-bottom: 35px;
    margin-bottom: 35px
  }

  .field-blog-tags .field-item {
    display: inline-block;
    padding: 0 10px;
    font-size: 15px;
    position: relative
  }

  .field-blog-tags .field-item a {
    color: #3e3d4e;
    text-decoration: underline;
    font-size: 16px
  }

  .field-blog-tags .field-item a:before {
    content: "#"
  }

  .content_bottom {
    background: #ebebeb;
    padding: 90px 0
  }

  #block-block-11 {
    font-size: 21px;
    margin: 0;
    text-align: center
  }

  #block-block-11 h2 {
    color: #3e3d4e;
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    font-size: 63px;
    text-align: center;
    margin-top: 0
  }

  .project-started a.button {
    background: #37cea6;
    color: #fff;
    display: inline-block;
    text-align: center;
    font-size: 39px;
    font-weight: 800;
    text-shadow: 0 1px 2px rgba(0, 0, 0, .5);
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    padding: 0 20px
  }

  .our-services {
    border-bottom: 5px solid #00c2e5;
    padding: 20px;
    text-align: center;
    min-height: 360px;
    display: block;
    box-shadow: 0 2px 0 0px rgba(0, 0, 0, .016);
    margin-bottom: 30px;
    border-left: 1px solid #d7d7d7;
    border-top: 1px solid #d7d7d7;
    border-right: 1px solid #d7d7d7
  }

  .our-services img {
    display: inline-block
  }

  .our-services h4 {
    margin-top: 15px
  }

  .our-services h4 a {
    color: #3e3d4e;
    font-family: 'Poppins', sans-serif;
    font-weight: 300;
    font-size: 20px
  }

  .services-link a {
    font-size: 15px;
    font-weight: 900;
    color: #37cea6;
    text-transform: uppercase;
    position: relative;
    font-family: 'Poppins', sans-serif;
    font-weight: 800
  }

  .services-link a:after {
    content: "\f30b";
    font-size: 15px;
    font-family: "Font Awesome 5 Free";
    padding-left: 5px
  }

  .responsive-item {
    position: relative
  }

  .responsive-item:before {
    content: "";
    width: 70px;
    height: 70px;
    background: url(img/icons/Responsive-Web-Design.png) no-repeat center 0;
    padding: 38px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-bottom: 25px;
    margin-top: 25px
  }

  .responsive-item-2:before {
    background: url(img/icons/WIREFRAMING-%26-DESIGN.png) no-repeat center 0
  }

  .responsive-item-3:before {
    background: url(img/icons/HTML-%26-WEB-DEVELOPMENT.png) no-repeat center 0
  }

  .responsive-item-4:before {
    background: url(img/icons/LAUNCH-%26-DIGITAL-MARKETING.png) no-repeat center 0
  }

  .page-node-69 .section-two .section-content h2 {
    background: 0 0;
    padding: 0;
    text-align: left
  }

  .res-box-content {
    font-size: 15px;
    text-align: center;
    padding: 20px;
    box-shadow: 0 2px 40px 0 rgba(0, 0, 0, .1);
    min-height: 190px
  }

  .res-box-content h2 {
    font-size: 16px;
    color: #3e3d4e;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    display: block;
    min-height: 38px
  }

  .page-node-90 #block-views-full-width-content-block,
  .page-node-93 #block-views-full-width-content-block {
    background: url(img/Pay-Per-Click.png) no-repeat;
    background-size: auto auto;
    background-size: cover;
    padding: 60px 0
  }

  .page-node-90 .box-content,
  .page-node-93 .box-content {
    border: none;
    background: #fff;
    padding: 15px;
    text-align: center;
    font-size: 15px;
    margin-bottom: 30px;
    color: #3e3d4e;
    min-height: 100px
  }

  .audits-group h2:before {
    content: "";
    width: 62px;
    height: 62px;
    display: block;
    background: url(img/icons/PPC-Audits.png) no-repeat;
    margin: 5px auto
  }

  .social-group h2:before {
    content: "";
    width: 62px;
    height: 62px;
    display: block;
    background: url(img/icons/Social-Advertising.png) no-repeat;
    margin: 5px auto
  }

  .adWords-group h2:before {
    content: "";
    width: 62px;
    height: 62px;
    display: block;
    background: url(img/icons/Google-AdWords.png) no-repeat;
    margin: 5px auto
  }

  .bing-group h2:before {
    content: "";
    width: 62px;
    height: 62px;
    display: block;
    background: url(img/icons/Bing-Advertising.png) no-repeat;
    margin: 5px auto
  }

  .advertising-group h2:before {
    content: "";
    width: 62px;
    height: 62px;
    display: block;
    background: url(img/icons/Display-Advertising.png) no-repeat;
    margin: 5px auto
  }

  .remarketing-group h2:before {
    content: "";
    width: 62px;
    height: 62px;
    display: block;
    background: url(img/icons/Remarketing-%26-Retargeting.png) no-repeat;
    margin: 5px auto
  }

  .page-node-90 .box-content h2 {
    color: #3e3d4e;
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    font-weight: 900;
    text-transform: uppercase;
    margin-top: 10px
  }

  .page-node-93 .audits-group h2:before {
    content: "";
    width: 62px;
    height: 62px;
    display: block;
    background: url(img/icons/Apple.png) no-repeat;
    margin: 5px auto
  }

  .page-node-93 .social-group h2:before {
    content: "";
    width: 62px;
    height: 62px;
    display: block;
    background: url(img/icons/Android.png) no-repeat;
    margin: 5px auto
  }

  .rightalign {
    text-align: right
  }

  .rightalign img {
    display: inline-block
  }

  .page-node-93 .adWords-group h2:before {
    content: "";
    width: 62px;
    height: 62px;
    display: block;
    background: url(img/icons/App.png) no-repeat;
    margin: 5px auto
  }

  .page-node-90 .section-one .section-content h2,
  .page-node-93 .section-one .section-content h2 {
    background: 0 0;
    padding: 0;
    text-align: left
  }

  .full-width-content-block-93 .section-one .section-content h2 {
    font-size: 55px
  }

  .page-node-90 .title-63,
  .page-node-93 .title-63 {
    font-size: 63px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    margin-bottom: 35px;
    text-align: center;
    background: url(img/white-title-bg.png) no-repeat center bottom;
    padding-bottom: 20px;
    color: #fff
  }

  .full-width-content-block-93 .col-md-12 p {
    font-size: 17px
  }

  .full-width-content-block-93 {
    text-align: center;
    color: #fff
  }

  h2.title-63 {
    font-size: 63px
  }

  .buy-process-item i {
    position: absolute;
    left: 50%;
    transform: translate(-50%, 0);
    -webkit-transform: translate(-50%, 0);
    width: 90px;
    height: 90px;
    font-size: 0;
    color: #fff;
    border-radius: 50%;
    background-color: #47a8bc !important;
    box-shadow: 0 0 4px #999;
    border: 5px solid #fff
  }

  .buy-process-items .fa-download {
    background: url(img/quality-plugins.png) no-repeat center
  }

  .buy-process-items .fa-plug {
    background: url(img/web-choice-pro-theme-installation.png) no-repeat center
  }

  .buy-process-items .fa-cogs {
    background: url(img/writing-content.png) no-repeat center
  }

  .buy-process-items .fa-file-text {
    background: url(img/customization.png) no-repeat center
  }

  .buy-process-items .fa-bar-chart {
    background: url(img/seo.png) no-repeat center
  }

  .page-node-71 .section-one .section-content h2 {
    background: url(img/icons/SEO-Audit.png) no-repeat left top;
    padding-top: 100px;
    text-align: left
  }

  .page-node-71 .section-two .section-content h2 {
    background: url(img/icons/SEO-Optimisation.png) no-repeat right top;
    padding-top: 100px;
    text-align: right
  }

  .page-node-71 #block-views-full-width-content-bottom-block {
    background: #f1f1f3;
    width: 100%;
    overflow: hidden;
    margin-bottom: 0;
    margin-top: 90px
  }

  .seo-growth-box {
    text-align: center;
    margin: 10px;
    border-bottom: 1px solid #cdcdd2;
    padding-bottom: 20px
  }

  .seo-growth-item:last-child .seo-growth-box {
    border: none
  }

  .seo-growth-box h2 {
    color: #54beaf;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    font-size: 42px;
    margin-bottom: 0;
    margin-top: 10px
  }

  .seo-growth-box h2 span {
    font-family: 'Poppins', sans-serif;
    font-weight: 400
  }

  .seo-growth-item:first-child h2 span {
    font-size: 22px
  }

  #block-block-15 {
    background: url(img/Pay-Per-Click.png) no-repeat;
    background-size: auto auto;
    background-size: auto auto;
    background-size: cover;
    padding: 60px 0
  }

  #block-block-15 h2 {
    border: none;
    background: #fff;
    padding: 15px;
    text-align: center;
    font-size: 15px;
    margin-bottom: 30px;
    color: #3e3d4e;
    min-height: 100px
  }

  #block-block-15 h2 {
    font-size: 63px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    margin-bottom: 35px;
    text-align: center;
    background: url(img/white-title-bg.png) no-repeat center bottom;
    padding-bottom: 20px;
    color: #fff
  }

  .seo-beneficial-item {
    border: none;
    background: #fff;
    padding: 15px 8px;
    text-align: center;
    font-size: 15px;
    margin-bottom: 30px;
    color: #3e3d4e;
    min-height: 205px
  }

  .seo-beneficial-item h4 {
    font-size: 20px;
    font-family: 'Poppins', sans-serif;
    font-weight: 300;
    text-transform: uppercase;
    margin-bottom: 0
  }

  .seo-beneficial-item h4:before {
    content: "";
    width: 62px;
    height: 62px;
    display: block;
    background: url(img/icons/Ranking-Importance.png) no-repeat;
    margin: 5px auto
  }

  .strategy-group h4:before {
    background: url(img/icons/Effective-strategy.png) no-repeat
  }

  .visitors-group h4:before {
    background: url(img/icons/Bring-Visitors.png) no-repeat
  }

  .engines-group h4:before {
    background: url(img/icons/Major-Search-Engines.png) no-repeat
  }

  .results-group h4:before {
    background: url(img/icons/Trillion-Search-Results.png) no-repeat
  }

  .perception-group h4:before {
    background: url(img/icons/Consumer-Perception.png) no-repeat
  }

  .page-node-89 .field-name-field-full-width-top {
    text-align: center;
    clear: both;
    overflow: hidden;
    padding-top: 135px;
    background: url(img/blog-icon.png) no-repeat center 0;
    padding-bottom: 50px
  }

  .page-node-89 .field-name-field-full-width-top h2 {
    font-size: 63px;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    margin-top: 0;
    margin-bottom: 35px;
    background: url(img/titleborderbg.png) no-repeat center bottom;
    padding-bottom: 12px
  }

  .page-node-89 .section-one .section-content h2 {
    font-size: 53px;
    text-align: left;
    background: url(img/icons/SEO-Audit.png) no-repeat left 0
  }

  .page-node-89 .section-two .section-content h2 {
    font-size: 39px;
    text-align: left;
    background: url(img/icons/SEO-Audit.png) no-repeat left 0
  }

  .page-node-89 .section-two .section-content {
    text-align: left
  }

  .page-node-89 #block-views-full-width-content-block {
    background: #ebebeb;
    clear: both;
    overflow: hidden;
    padding: 35px 0
  }

  .page-node-89 #block-views-full-width-content-block h2 {
    text-align: center;
    font-size: 63px;
    background: url(img/titleborderbg.png) no-repeat center bottom;
    padding-bottom: 12px;
    margin-bottom: 35px
  }

  .full-width-content-block-89 .sectiondesc a.btn {
    background: #00c2e5;
    color: #fff;
    display: inline-block;
    text-align: center;
    font-size: 20px;
    text-shadow: 0 1px 2px rgba(0, 0, 0, .5);
    margin-left: auto;
    margin-right: auto;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    padding: 14px 40px
  }

  .social-media-box {
    border-bottom: 5px solid #00c2e5;
    padding: 20px 35px;
    text-align: center;
    min-height: 300px;
    display: block;
    box-shadow: 0 2px 0 0 rgba(0, 0, 0, .016);
    margin-bottom: 30px;
    border-left: 1px solid #d7d7d7;
    border-top: 1px solid #d7d7d7;
    border-right: 1px solid #d7d7d7
  }

  .social-media-item:nth-child(3n+3) .social-media-box {
    border-bottom: 5px solid #37cea6
  }

  .social-media-box h4 span {
    display: block
  }

  .social-media-box h4 {
    font-size: 20px;
    font-family: 'Poppins', sans-serif;
    font-weight: 300;
    text-transform: uppercase;
    text-align: center
  }

  .social-media-box h4:before {
    content: "";
    width: 74px;
    height: 74px;
    display: block;
    background: url(img/icons/desktop-mobile.png) no-repeat center 0;
    margin: 0 auto
  }

  .full-width-content-block-89 .social-media-box h4:before {
    background: url(img/icons/Responsive-Web-Design.png) no-repeat center 0;
    height: 86px
  }

  .full-width-content-block-89 .social-media-box h4 {
    font-size: 18px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
  }

  .full-width-content-block-89 .social-media-box {
    border: none;
    padding: 20px 15px;
    min-height: 90px
  }

  .page-node-76 .field-name-field-full-width-top {
    background: url(img/blog-icon.png) no-repeat center top;
    text-align: center;
    clear: both;
    overflow: hidden;
    padding-top: 110px;
    padding-bottom: 50px
  }

  .page-node-76 .section-one .section-content h2 {
    background: 0 0;
    padding: 0
  }

  .page-node-76 .field-name-field-full-width-top .social-media-title {
    display: block;
    padding-bottom: 40px
  }

  .page-node-76 .field-name-field-full-width-top h2 {
    font-size: 63px;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    margin-top: 0;
    margin-bottom: 35px
  }

  .page-node-76 .field-name-field-full-width-top h2:after {
    content: "";
    width: 100%;
    display: block;
    border-bottom: 1px solid #d8d8d8;
    margin-left: auto;
    margin-right: auto;
    max-width: 375px;
    margin-top: 5px
  }

  #block-block-16 {
    margin-bottom: 130px
  }

  #block-block-16 h2 {
    font-size: 63px;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    margin-top: 35px;
    margin-bottom: 35px;
    text-align: center
  }

  #block-block-16 h2:after {
    content: "";
    width: 100%;
    display: block;
    border-bottom: 1px solid #d8d8d8;
    margin-left: auto;
    margin-right: auto;
    max-width: 375px;
    margin-top: 5px
  }

  .sw-process-box {
    text-align: center;
    padding: 20px;
    box-shadow: 0 2px 40px 0 rgba(0, 0, 0, .1);
    min-height: 450px
  }

  .sw-process-box h4 {
    font-size: 16px;
    color: #3e3d4e;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    display: block;
    min-height: 38px;
    text-transform: uppercase;
    margin: 7px 0
  }

  .sw-process-box h4:before {
    content: "";
    width: 70px;
    height: 70px;
    background: url(img/icons/design-group-icon.png) no-repeat center 0;
    padding: 30px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-bottom: 12px;
    margin-top: 10px
  }

  .sw-process-box-1 h4:before {
    background: url(img/icons/RESPONSIVE-WEBSITE-DESIGN.png) no-repeat center 0
  }

  .sw-process-box-2 h4:before {
    background: url(img/icons/Display-Advertising.png) no-repeat center 0
  }

  .sw-process-box-4 h4:before {
    background: url(img/icons/Ranking-Importance.png) no-repeat center 0
  }

  .page-node-94 #block-views-full-width-content-block {
    background-color: #fff;
    padding-bottom: 0
  }

  .page-node-94 .full-width-content-block-94.container {
    max-width: 100%;
    padding: 0
  }

  .full-width-content-block-94 h2 {
    font-size: 63px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    margin-top: 55px;
    margin-bottom: 35px;
    text-align: center;
    background: url(img/titleborderbg.png) no-repeat center bottom;
    padding-bottom: 35px
  }

  .faq-question-answer {
    border: 1px solid #ebebeb;
    margin-bottom: 10px;
    background: #f5f5f5;
    padding: 10px;
    border-radius: 2px
  }

  .faq-question {
    padding-top: 0;
    padding-left: 26px;
    background: url(img/icons/add.png) no-repeat left 9px;
    background-size: auto auto;
    background-size: auto auto;
    font-size: 20px;
    background-size: 18px
  }

  .faq-question.faq-qa-visible {
    background: url(img/icons/substract.png) no-repeat left 9px;
    background-size: auto auto;
    background-size: 18px
  }

  .faq-answer {
    padding-left: 26px
  }

  .faq-question a {
    color: #343333
  }

  .page-node-101 #block-views-full-width-content-block {
    background-color: #fff;
    padding-top: 100px;
    padding-bottom: 0
  }

  .full-width-content-block-101.container {
    max-width: 100%;
    padding: 0
  }

  .col-xs-15,
  .col-sm-15,
  .col-md-15,
  .col-lg-15 {
    position: relative;
    min-height: 1px;
    padding-right: 10px;
    padding-left: 10px
  }

  .view-case-studies .views-row {
    padding: 30px 0;
    border-bottom: 1px solid #ddd;
    clear: both
  }

  .case-study-img img {
    border: 1px solid;
    padding: 5px
  }

  .case-study-des a h3 {
    font-size: 28px;
    text-transform: uppercase
  }

  .case-study-des h3 {
    font-size: 21px;
    font-family: sans-serif;
    line-height: 1.6;
    margin-top: 0
  }

  .open-sans .case-study-des h3 {
    font-family: 'Open Sans', sans-serif
  }

  .readmorelink a {
    width: 100%;
    background: #2dc0f0;
    padding: 12px 0;
    text-align: center;
    text-transform: uppercase;
    font-size: 14px;
    color: #fff;
    box-shadow: 0px 0px 5px #ccc;
    font-weight: 500;
    display: block;
    margin-top: 58px
  }

  .readmorelink a:hover {
    background: #fff;
    box-shadow: 0px 0px 5px #ccc;
    text-decoration: none;
    color: #2dc0f0
  }

  .node-type-case-studies .case-study-des {
    padding: 40px 0;
    clear: both;
    overflow: hidden
  }

  .twoimg .field-item {
    float: left;
    width: 100%;
    height: auto;
    margin: 0;
    padding: 0
  }

  .twoimg img {
    border: none;
    margin: 0;
    padding: 0
  }

  .case-study-des.project-strategy {
    background: #ebebeb;
    padding: 40px 35px;
    text-align: center;
    margin-bottom: 65px
  }

  .case-study-des.project-results {
    background: #2dc0f0;
    color: #fff;
    padding: 40px 35px
  }

  .case-study-des.project-results h2 {
    color: #fff;
    margin-top: 0
  }

  .visitsitelink {
    display: block;
    text-align: center
  }

  .visitsitelink a {
    border: 3px solid #2dc0f0;
    color: #2dc0f0;
    padding: 10px 60px;
    text-transform: uppercase;
    font-size: 18px;
    font-weight: 700
  }

  .visitsitelink a:hover {
    border: 3px solid #2dc0f0;
    background: #2dc0f0;
    color: #fff
  }

  @media (max-width:768px) {
    .node-type-article .content_bottom {
      background: 0 0
    }

    .blogdescription,
    .blogbottomcontent {
      font-size: 15px
    }

    #block-views-our-blog-block-2 {
      margin-bottom: 35px;
      text-align: center
    }

    .node-type-case-studies .case-study-des h2 {
      text-align: center
    }
  }

  @media (min-width:768px) {
    .case-study-des a h3 {
      margin-top: 0
    }

    .twoimg .field-item {
      width: 50%
    }

    .col-sm-15 {
      width: 20%;
      float: left
    }

    #block-views-our-blog-block-2 h2.block-title {
      font-weight: 800;
      font-size: 63px;
      font-family: 'Poppins', sans-serif;
      font-weight: 900
    }

    .node-type-article .blogimg {
      margin-bottom: 25px;
      float: right;
      width: 50%;
      margin-left: 47px
    }

    .blogdescription .videowrapper {
      float: left;
      padding-left: 0;
      margin-top: 12px;
      margin-right: 45px;
      margin-bottom: 10px
    }
  }

  @media (min-width:992px) {
    .col-md-15 {
      width: 20%;
      float: left
    }

    .seo-growth-box {
      border-right: 1px solid #cdcdd2;
      border-bottom: none
    }

    .view-our-top-services .bx-controls {
      display: none
    }

    .navbar-nav>li>a {
      padding: 18px 8px
    }

    #navbar-collapse {
      padding-left: 20px;
      padding-right: 0
    }

    .page-node-62 .main-container {
      background: url(img/blog-icon.png) no-repeat;
      background-position: center 0;
      margin-top: 0;
      margin-bottom: 45px;
      padding-top: 130px
    }

    .our-services.services-nid-4,
    .our-services.services-nid-115 {
      border-bottom: 5px solid #37cea6
    }
  }

  @media (min-width:1200px) {
    .col-lg-15 {
      width: 20%;
      float: left
    }

    .navbar-nav>li>a {
      padding: 17px
    }

    .res-box-content {
      min-height: 252px
    }
  }

  @media (min-width:320px) {
    .ch-logo img {
      max-width: 52px
    }

    .call-email img {
      max-width: 46px
    }
  }

  @media (max-width:767px) {
    .front .content-top {
      padding-bottom: 30px
    }

    #block-block-15 h2 {
      font-size: 30px;
      font-family: 'Poppins', sans-serif;
      font-weight: 800
    }

    .navbar {
      padding-top: 0
    }

    .page-title .page-header {
      font-size: 35px;
      text-shadow: none;
      margin: 0 auto 0 auto;
      border-bottom: 1px solid #e5e5e5;
      padding-bottom: 20px
    }

    .not-front .page-title .page-header {
      text-transform: none;
      padding: 0;
      border: none;
      margin: 15px auto
    }

    .node-page .field-name-body h2 {
      font-size: 28px;
      font-family: 'Poppins', sans-serif;
      font-weight: 800;
      margin: 0
    }

    .node-page .field-name-body h3 {
      font-size: 15px;
      font-family: 'Poppins'
    }

    .view-our-top-services .bx-wrapper .bx-prev,
    .view-our-top-services .bx-wrapper .bx-next {
      background: 0 0;
      color: #fff;
      text-indent: 0;
      font-size: 26px;
      font-weight: 300;
      top: 25%
    }

    .header-wrapper {
      background-color: #a94442;
      background-repeat: repeat;
      background-position-x: 0%;
      background-position-y: 0%;
      background-size: auto auto;
      background-repeat: no-repeat;
      background-position: center top;
      background-size: cover
    }

    #block-views-our-top-services-block {
      background: #fff
    }

    .top-services {
      text-align: center;
      background: 0 0;
      padding: 20px 0;
      margin-bottom: 30px;
      color: #343333
    }

    .top-services h4 {
      color: #343333;
      text-align: center;
      padding: 0 10px
    }

    .top-services h4 strong {
      display: block
    }

    .shortdesc {
      display: block;
      min-height: 190px;
      margin-bottom: 15px;
      padding: 15px
    }

    .frontportfolio {
      background: 0 0;
      padding-top: 0;
      text-align: center;
      padding-bottom: 50px;
      border-bottom: none;
      background: url(img/icons/blue-line-bg.png) no-repeat;
      background-position-x: 0%;
      background-position-y: 0%;
      background-position: center bottom
    }

    #block-block-4 .block-title {
      display: none
    }

    #block-block-4 h3 {
      font-size: 30px;
      margin-bottom: 10px;
      font-family: 'Poppins', sans-serif;
      font-weight: 800;
      color: #3e3d4e;
      margin-top: 40px
    }

    #block-block-4 .portfolioinfo {
      margin-top: 0;
      margin-bottom: 15px;
      font-size: 15px
    }

    #block-block-4 .portfolioinfo:after {
      content: "";
      display: none
    }

    #block-views-front-portfolio-block {
      display: block
    }

    #block-views-front-portfolio-block-1 {
      display: none
    }

    #block-views-front-portfolio-block-2 {
      display: none
    }

    #block-views-our-blog-block {
      display: none
    }

    #block-views-our-blog-block-3 {
      display: block
    }

    .view-front-portfolio .bx-controls,
    .view-our-blog .bx-controls {
      max-width: 115px
    }

    .view-front-portfolio .bx-wrapper .bx-prev,
    .view-front-portfolio .bx-wrapper .bx-next {
      border: #00c2e5 solid 2px;
      width: 42px;
      height: 42px;
      background: 0 0;
      font-size: 26px;
      color: #3e3d4e;
      font-weight: 300;
      text-indent: unset
    }

    .view-our-blog .bx-wrapper .bx-prev,
    .view-our-blog .bx-wrapper .bx-next {
      border: #00c2e5 solid 2px;
      width: 42px;
      height: 42px;
      background: 0 0;
      font-size: 26px;
      color: #3e3d4e;
      font-weight: 300;
      text-indent: unset
    }

    .page-node-67 .view-front-portfolio .view-footer {
      display: none
    }

    .view-front-portfolio .view-footer {
      clear: both;
      margin-top: 110px;
      width: 100%;
      clear: both
    }

    .view-front-portfolio .view-footer a {
      border: #00c2e5 solid 2px;
      padding: 10px 25px;
      font-size: 16px;
      color: #00c2e5;
      font-family: 'Poppins', sans-serif;
      font-weight: 800
    }

    .view-front-portfolio .view-footer a:hover {
      border: #00c2e5 solid 2px;
      color: #fff;
      background: #00c2e5
    }

    .ourblogs {
      background: 0 0;
      padding-top: 0;
      padding-bottom: 15px;
      text-align: center;
      background: url(img/icons/blue-line-bg.png) no-repeat;
      background-position-x: 0%;
      background-position-y: 0%;
      background-position: center bottom
    }

    #block-block-18 h2 {
      font-size: 30px;
      font-weight: 100;
      margin-bottom: 15px;
      font-family: 'Poppins', sans-serif;
      font-weight: 800;
      color: #3e3d4e;
      margin-top: 0;
      text-align: center
    }

    .ourblogs h2 {
      font-size: 30px;
      font-weight: 100;
      margin-bottom: 15px;
      font-family: 'Poppins', sans-serif;
      font-weight: 800;
      color: #3e3d4e;
      margin-top: 35px;
      text-align: center
    }

    .hp-blogs-cats span {
      display: block;
      width: 100%;
      margin: 7px auto
    }

    #block-block-6 {
      background: url(img/icons/blue-line-bg.png) no-repeat;
      background-position-x: 0%;
      background-position-y: 0%;
      padding: 0;
      text-align: center;
      margin-bottom: 30px;
      background-position: center bottom
    }

    #block-block-6 h2 {
      font-size: 30px;
      font-weight: 100;
      margin-bottom: 15px;
      font-family: 'Poppins', sans-serif;
      font-weight: 800;
      color: #3e3d4e;
      margin-top: 0
    }

    .section-content {
      clear: both;
      overflow: hidden
    }

    .section-content h2 {
      font-family: 'Poppins', sans-serif;
      font-weight: 800;
      font-size: 22px;
      text-align: center;
      margin-top: 30px
    }

    .sectiondesc {
      font-size: 15px;
      text-align: center;
      margin-bottom: 25px
    }

    .box-content {
      font-size: 15px;
      border: 0;
      margin-bottom: 0;
      min-height: 0
    }

    .box-content h2 {
      font-size: 24px;
      background-size: 52px !important;
      padding-top: 60px
    }

    #block-block-11 h2 {
      font-size: 30px;
      font-family: 'Poppins', sans-serif;
      font-weight: 800
    }

    .project-started a.button {
      font-size: 16px;
      background: #00c2e5;
      font-family: 'Poppins', sans-serif;
      font-weight: 800;
      max-width: 165px;
      padding: 10px;
      text-shadow: 0 1px 2px rgba(0, 0, 0, .3)
    }

    .content_bottom {
      padding: 0
    }

    #block-block-11 {
      font-size: 15px;
      margin-top: 25px;
      text-align: center;
      background: url(img/icons/WC-smile.png) center 30px no-repeat transparent;
      padding-top: 100px;
      padding-bottom: 55px
    }

    .res-box-content h2 {
      font-size: 24px;
      margin-top: 10px
    }

    .node-page .field-name-body {
      font-size: 15px
    }

    .res-box-content {
      font-size: 15px;
      text-align: center;
      padding: 0 20px 20px;
      box-shadow: none;
      min-height: 100px
    }

    .sectiondesc ul li {
      font-size: 15px;
      background-size: 16px;
      background-position: left 14px
    }

    .box-content:before {
      padding-bottom: 0
    }

    .page-node-62 .main-container {
      background: 0 0;
      padding-top: 0
    }

    .our-services {
      border: none !important;
      min-height: 100px
    }

    .our-services h4 a {
      font-family: 'Poppins', sans-serif;
      font-weight: 800;
      font-size: 24px
    }

    .page-node-62 .node-page .field-name-body {
      margin: 0
    }

    .responsive-item:before {
      margin-top: 50px
    }

    .blog-details-page .pagetitle h2 {
      font-size: 24px;
      font-family: 'Poppins', sans-serif;
      font-weight: 800
    }

    .blog-cat .field-item {
      display: inline-block;
      padding: 0 12px;
      border-right: 0;
      line-height: 18px;
      width: 100%
    }

    .emailinfo {
      display: none
    }

    .callusbox {
      display: none
    }

    .footer-bottom {
      display: none
    }

    .footer_bottom {
      display: none
    }

    #backtotop {
      position: fixed;
      bottom: 30px;
      width: 42px;
      height: 42px;
      display: none;
      border-radius: 100%;
      text-align: center;
      font-size: 18px;
      color: #fff;
      z-index: 99;
      line-height: 36px;
      background: #222;
      left: 48%
    }

    .footer {
      background: #fff;
      margin-top: 0;
      border: none;
      padding-top: 40px;
      position: relative;
      max-width: 100%;
      overflow: hidden
    }

    .front .page-title .page-header {
      display: none
    }

    .page-header.mobile-page-header {
      display: block !important;
      text-align: center;
      font-size: 33px;
      border-bottom: 1px solid #49c9c5;
      overflow: hidden;
      margin: 15px auto
    }

    .page-header.mobile-page-header strong {
      display: block
    }
  }

  @media (min-width:768px) {
    .header-wrapper {
      background: url('img/banner_new168b3.jpg?ver=1');
      background-repeat: repeat;
      background-position-x: 0%;
      background-position-y: 0%;
      background-repeat: no-repeat;
      background-position: center 0;
      background-size: cover
    }

    .mobile-page-header {
      display: none
    }

    .node-page .field-name-body img {
      float: right;
      margin-left: 25px
    }

    .rightalign {
      float: right
    }

    #block-views-front-portfolio-block {
      display: none
    }

    #block-views-front-portfolio-block-1 {
      display: block
    }

    #block-views-our-blog-block {
      display: block
    }

    #block-views-our-blog-block-3 {
      display: none
    }

    #block-block-6 h2 {
      display: none
    }

    #block-block-18 {
      display: none
    }
  }

  @media screen and (max-width:768px) {
    #block-block-15 {
      padding: 30px 0
    }

    .full-width-content-block-94 h2 {
      font-size: 22px;
      padding: 0;
      background: 0 0
    }

    .text-wrap {
      box-shadow: none
    }

    .buy-process-item i {
      display: none
    }

    .buy-process-item:nth-child(1) {
      background: url(img/icons/web-development-strategy.png) top center no-repeat
    }

    .buy-process-item:nth-child(2) {
      background: url(img/icons/web-development-design.png) top center no-repeat;
      padding: 168px 20px 60px
    }

    .buy-process-item:nth-child(3) {
      background: url(img/icons/web-development-quality-assurance.png) top center no-repeat;
      padding: 168px 20px 60px
    }

    .buy-process-item:nth-child(4) {
      background: url(img/icons/web-development-go-live.png) top center no-repeat;
      padding: 168px 20px 60px
    }

    .buy-process-item:nth-child(5) {
      background: url(img/icons/web-development-aftercare-support.png) top center no-repeat;
      padding: 168px 20px 60px
    }

    .page-node-71 .node-page .field-name-body h2 strong {
      font-size: 20px
    }

    .page-node-71 .field-name-field-full-width-top h2 {
      font-size: 24px;
      background: 0 0;
      margin-bottom: 0
    }

    .page-node-71 .field-name-field-full-width-top {
      font-size: 15px
    }

    .page-node-71 .section-one .section-content h2 {
      background-position: center top;
      background-size: 78px
    }

    .blog-cat {
      margin-top: 15px
    }

    .page-node-71 .section-two .section-content h2 {
      background-position: center top;
      background-size: 78px
    }

    .bottom-box-content .titlebottom {
      font-size: 28px;
      background: 0 0;
      margin-bottom: 0;
      padding-bottom: 0
    }

    .bottom-box-content {
      font-size: 15px
    }

    .node-page .field-name-body h3 {
      font-size: 15px
    }

    .page-node-89 .field-name-field-full-width-top h2 {
      font-size: 28px;
      background: 0 0
    }

    .page-node-89 .section-one .section-content h2 {
      font-size: 28px;
      text-align: center
    }

    .field-items {
      background-position: center
    }

    .page-node-89 .section-one .section-content h2 {
      padding-top: 40%;
      background-position: center
    }

    .page-node-89 .section-two .section-content h2 {
      font-size: 28px;
      text-align: center;
      background-position: center;
      padding-top: 50%
    }

    .field-item h3 {
      font-size: 17px
    }

    .full-width-content-block-89 .social-media-box h4:before {
      font-size: 35px
    }

    .page-node-89 #block-views-full-width-content-block h2 {
      font-size: 35px;
      padding-top: 30%
    }

    .field-items {
      text-align: center
    }

    .page-node-90 .title-63,
    .page-node-93 .title-63 {
      font-size: 28px;
      background: 0 0
    }

    .page-node-90 #block-views-full-width-content-block,
    .page-node-93 #block-views-full-width-content-block {
      background: 0 0
    }

    .page-node-90 .title-63,
    .page-node-93 .title-63 {
      color: #3e3d4e
    }

    .box-content {
      padding: 20px 0;
      border: none !important
    }

    .page-node-90 .box-content,
    .page-node-93 .box-content {
      margin-bottom: 0;
      padding: 0
    }

    .page-node-90 .title-63,
    .page-node-93 .title-63 {
      margin: 0;
      padding: 0
    }

    .content_below {
      padding: 0;
      margin: 0
    }

    .not-front .main-container {
      margin: 0;
      padding: 0
    }

    .full-width-content-block-90 {
      background: url(img/icons/blue-line-bg.png) top no-repeat;
      padding-top: 10%
    }

    .full-width-content-block-93 {
      color: #333
    }

    .full-width-content-block-93 .section-one .section-content h2 {
      text-align: center;
      font-size: 28px
    }

    .full-width-content-block-92 h2 {
      font-size: 30px;
      background: 0 0
    }

    .sectiondesc {
      background: url(img/icons/blue-line-bg.png) bottom no-repeat;
      padding-bottom: 25px
    }

    .buy-process-wrap {
      background: url(img/icons/blue-line-bg.png) bottom no-repeat;
      padding: 0
    }

    .page-node-92 #block-views-full-width-content-bottom-block {
      background: 0 0;
      padding: 0
    }

    .node-page .field-name-body h2 {
      font-size: 17px;
      margin: 15px auto
    }

    #block-webform-client-block-117 {
      background: 0 0;
      padding-top: 0
    }

    .node-page .field-name-body {
      margin-bottom: 0
    }

    .webform-client-form .form-group {
      margin-bottom: 15px;
      clear: both;
      overflow: hidden
    }

    .panel {
      margin-bottom: 0
    }

    .contactaddmap {
      background: 0 0
    }

    .addbox-content {
      display: none
    }

    .addbox-content-wrap {
      padding-bottom: 0;
      padding-top: 11%;
      background: url(img/icons/blue-line-bg.png) top no-repeat;
      text-align: center;
      height: 79px;
      margin-top: 14%
    }

    .addbox-content-wrap h4 {
      font-size: 25px;
      font-weight: 700
    }

    .addbox-content-wrap:nth-child(2) {
      display: none
    }

    .page-node-95 .section-two .section-content h2 {
      font-size: 28px;
      text-align: center
    }
  }

  @media (max-width:990px) {
    .row {
      margin-left: 0;
      margin-right: 0
    }

    .navbar {
      width: 100%;
      padding-top: 35px;
      border-radius: 0;
      border: none;
      clear: both;
      text-align: center;
      margin: 0 !important;
      padding-bottom: 25px
    }

    .bx-wrapper .bx-controls-direction a {
      z-index: 9;
      color: #1bb2ce !important
    }

    .small-screen {
      display: block
    }

    .large-screen {
      display: none
    }

    .navbar-header {
      float: left;
      width: 100%
    }

    .navbar-header {
      float: left;
      width: 100%;
      padding: 0 15px
    }

    .navbar-nav>li>a .caret {
      float: right;
      background: url(img/small-arrow.png) center no-repeat;
      padding: 15px;
      border: none
    }

    .dropdown-menu>li.dropdown-submenu a .caret {
      content: "";
      float: right;
      background: url(img/small-arrow.png) center no-repeat;
      padding: 15px;
      border: none
    }

    .dropdown-menu>li>a:hover,
    .dropdown-menu>li>a:focus {
      color: #fff;
      text-decoration: none;
      background-color: transparent
    }

    .not-front .navbar-nav>li>a.active,
    .not-front .navbar-nav>li>a:hover {
      color: #222
    }

    .dropdown-menu>.active>a,
    .dropdown-menu>.active>a:hover,
    .dropdown-menu>.active>a:focus {
      background: 0 0;
      color: #222
    }

    .navbar-nav>li>.dropdown-menu {
      background: #00c2e5;
      width: 100%;
      z-index: 1000;
      border: none
    }

    .dropdown-menu>li .dropdown-menu {
      background: #00c2e5;
      width: 100%;
      z-index: 1000;
      border: none;
      top: 50px
    }

    .dropdown-menu>li .dropdown-menu li a {
      font-size: 16px
    }

    .dropdown-menu>li .dropdown-menu li a .caret {
      display: none
    }

    .dropdown-menu>li {
      border: none;
      position: relative
    }

    .dropdown-menu>li>a {
      color: #fff;
      font-size: 16px;
      text-shadow: initial;
      text-transform: none;
      background: 0 0
    }

    .collapsed-nav .navbar-nav>li {
      text-align: left
    }

    .collapsed-nav .navbar-nav>li>a {
      color: #fff;
      font-size: 28px;
      text-transform: none;
      background: 0 0
    }

    .navbar-nav {
      float: left;
      margin: 0;
      clear: both;
      width: 100%
    }

    .navbar-nav>li {
      float: left;
      width: 100%;
      clear: both
    }

    .navbar-nav>li>a {
      color: #00c2e5;
      padding: 12px
    }

    .navbar .logo {
      width: auto;
      max-width: 320px
    }

    .navbar-toggle {
      display: block;
      margin: 17px;
      z-index: 1000;
      position: relative
    }

    .free-consultation h2 {
      margin-top: 35px;
      font-size: 16px
    }

    .free-consultation h2 .text-200 {
      font-size: 28px
    }

    .free-consultation h2 .text-500 {
      font-size: 20px
    }

    .free-consultation a.button {
      font-size: 22px;
      max-width: 210px;
      padding: 2px;
      text-shadow: initial
    }

    #block-block-2 {
      background: url(img/blog-icon.png) center 0 no-repeat;
      text-align: center;
      padding-top: 96px;
      font-size: 15px;
      font-weight: 300;
      margin-bottom: 25px
    }

    .block-image,
    .block-body {
      text-align: center;
      margin-bottom: 25px;
      font-size: 15px
    }

    .block-body h2 {
      font-size: 24px
    }

    .block-image img {
      display: inline-block
    }

    .mobile-tablet-friendly h2 {
      font-size: 30px;
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      ;
      margin-bottom: 10px
    }

    .block-image {
      position: relative;
      margin-bottom: 10px;
      margin-top: 25px
    }

    #block-block-3 h2 {
      font-size: 30px;
      font-weight: 100;
      margin-bottom: 45px;
      font-family: 'Poppins', sans-serif;
      font-weight: 800;
      color: #3e3d4e;
      margin-bottom: 0
    }

    .res-view-row {
      background: 0 0 !important;
      padding-left: 0;
      font-size: 15px
    }

    .res-view-row h3 {
      font-size: 19px
    }

    .content-middle-wrapper {
      background: 0 0;
      background-color: rgba(0, 0, 0, 0);
      padding-top: 25px;
      background-color: #00c2e5;
      text-align: center
    }

    .res-view-row.res-view-row-1 {
      padding-top: 20px
    }

    .footer-logo {
      text-align: center;
      margin-top: 15px;
      margin-bottom: 15px
    }

    .footer-logo img {
      max-width: 300px
    }
  }

  @media screen and (max-width:540px) {
    .res-view-row.res-view-row-1 {
      background-size: 100% !important
    }
  }

  @media screen and (max-width:990px) and (min-width:767px) {
    .navbar-collapse.collapse {
      display: none !important
    }

    .navbar-collapse.collapse.in {
      display: block !important
    }
  }

  ul.secondary li.franchise-menu-item {
    display: block
  }

  ul.secondary li.franchise-menu-item {
    display: none
  }

  .block-image:after {
    content: "";
    border-bottom: 3px solid #37cea6;
    position: absolute;
    bottom: -30px;
    width: 40px;
  }

  .dropdown-menu>li .caret {
    display: none;
  }
  

  .content-middle.content-middle-inner {
    background: #fff;
  }

  .content-middle {
    background: url(img/bg-shadow.png) top center no-repeat transparent;
    padding: 35px 0;
    text-align: center;
  }

  .our-clients-logos {
    display: table-cell;
    text-align: center;
  }

  .our-clients-logo {
    display: table;
    table-layout: fixed;
    width: 100%;
    text-align: center
  }

  .ourclients {
    display: table-cell;
    vertical-align: middle;
    height: 110px
  }

  .ourclients img {
    display: inline-block
  }

  #block-views-our-clients-block h2 {
    font-size: 54px;
    line-height: 1;
    color: #3e3d4e;
    text-align: center;
    font-family: 'Poppins', sans-serif;
    font-weight: 200
  }

  #block-views-our-clients-block h2 b {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
  }

  #accordion-container {
    font-size: 16px;
    background: #fff;
    padding: 5px 10px 10px;
    text-align: left
  }

  .accordion-header {
    font-size: 16px;
    margin: 10px 0 0;
    padding: 10px 20px;
    cursor: pointer;
    color: #666
  }

  .active-header {
    -moz-border-radius: 5px 5px 0 0;
    -webkit-border-radius: 5px 5px 0 0;
    border-radius: 5px 5px 0 0;
    background: #2dc0f0;
    color: #fff
  }

  .active-header:hover {
    background: #2dc0f0
  }

  .inactive-header {
    background: #ebebeb
  }

  .inactive-header:hover {
    background: #2dc0f0;
    color: #fff
  }

  .accordion-content {
    display: none;
    padding: 20px;
    background: #fff;
    border: 1px solid #ccc;
    border-top: 0;
    -moz-border-radius: 0 0 5px 5px;
    -webkit-border-radius: 0 0 5px 5px;
    border-radius: 0 0 5px 5px
  }

  @media only screen and (min-width:768px) {
    .not-front .content-middle-wrapper .row {
      background: url(img/responsive-design-bg-2.png);
      background-repeat: repeat;
      background-position-x: 0%;
      background-position-y: 0%;
      background-size: auto auto;
      background-repeat: repeat;
      background-position-x: 0%;
      background-position-y: 0%;
      background-size: auto auto;
      background-repeat: no-repeat;
      background-position: right bottom;
      background-size: contain;
      padding: 30px 0
    }

    .front .content-middle-wrapper .row {
      background: url(img/responsive-design-bg-268b3.png?ver=1);
      background-position-x: 0%;
      background-position-y: 0%;
      background-repeat: repeat;
      background-size: auto;
      background-repeat: repeat;
      background-position-x: 0%;
      background-position-y: 0%;
      background-size: auto auto;
      background-repeat: repeat;
      background-position-x: 0%;
      background-position-y: 0%;
      background-size: auto auto;
      background-repeat: no-repeat;
      background-position: right top;
      background-size: 50%;
      padding: 30px 0
    }
  }

  .pur_img img {
    height: auto !important
  }

  .dhide {
    display: none
  }

  .faq-question {
    cursor: pointer
  }

  .field-blog-tags {
    display: none
  }

  h3.chead1 {
    font-size: 50px;
    color: #3e3d4e;
    text-align: center;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    line-height: 1.2
  }

  img.cthankimg {
    float: none;
    margin: 10px auto
  }

  h2.seod1 {
    font-size: 36px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    text-align: left;
    background: url(img/SEO-icon-1.png) no-repeat left 0;
    padding-top: 100px
  }

  p.tcont {
    text-align: center;
    font-size: 20px;
    color: #3e3d4e;
    font-weight: 300
  }

  .contactw {
    background: url(img/contact-content-bg.jpg) no-repeat left top
  }

  .handtio {
    padding-top: 135px;
    background: url(img/blog-icon.png);
    background-position-x: 0;
    background-position-y: 0;
    background-repeat: repeat;
    background-position-x: 0;
    background-position-y: 0;
    background-repeat: repeat;
    background-repeat: repeat;
    background-position-x: 0;
    background-position-y: 0;
    background-repeat: repeat;
    background-position-x: 0;
    background-position-y: 0;
    background-repeat: no-repeat;
    background-position: center 0;
    padding-bottom: 40px;
    clear: both;
    overflow: hidden;
    text-align: center
  }

  h2.seod1:after {
    content: "";
    display: block;
    border-bottom: 7px solid #00c2e5;
    width: 115px;
    padding-top: 20px
  }

  .frontportfolio2 {
    background: 0 0;
    padding-top: 50px;
    padding-bottom: 0
  }

  .seo-secn {
    font-size: 21px;
    padding: 30px 0;
    display: block;
    margin: 20px 0;
    clear: both;
    width: 100%;
    overflow: hidden
  }

  .flsection {
    text-align: center;
    clear: both;
    overflow: hidden;
    padding-top: 135px;
    background: url(img/blog-icon.png) no-repeat center 0;
    padding-bottom: 50px
  }

  h2.mrhead {
    font-size: 63px;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    margin-top: 0;
    margin-bottom: 35px;
    background: url(img/titleborderbg.png) no-repeat center bottom;
    padding-bottom: 12px
  }

  .bludeback {
    background: url(img/Pay-Per-Click.png) no-repeat !important;
    background-size: auto auto !important;
    background-size: cover !important;
    padding: 60px 0 !important
  }

  .bludeback .box-content {
    border: none;
    background: #fff;
    padding: 15px;
    text-align: center;
    font-size: 15px;
    margin-bottom: 30px;
    color: #3e3d4e;
    min-height: 100px
  }

  .bludeback h2.title-63 {
    font-size: 63px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    margin-bottom: 35px;
    text-align: center;
    background: url(img/white-title-bg.png) no-repeat center bottom;
    padding-bottom: 20px;
    color: #fff
  }

  .view-front-portfolio .bx-wrapper .bx-next,
  .view-front-portfolio .bx-wrapper .bx-prev {
    display: inline-block;
    font-size: 0;
    margin-right: 15px
  }

  .frontportfolio2 {
    background: 0 0;
    padding-top: 50px;
    padding-bottom: 0
  }

  .seo-package ul li {
    list-style: square;
    padding: 10px 0 10px 3px;
    margin-left: 10px
  }

  #block-block-28 ul li:before,
  .block-body a:after,
  .seo-package ul li:before,
  .services-link a:after {
    display: none
  }

  #block-block-28 ul li {
    list-style: square;
    padding: 10px 0 10px 2px;
    position: relative
  }

  @media screen and (max-width:768px) {
    .contactcontent {
      padding-top: 15px
    }

    .con_head {
      display: none
    }

    .view-front-portfolio .bx-wrapper .bx-prev {
      background: url(img/left-arrow.png) center center no-repeat !important
    }

    .view-front-portfolio .bx-wrapper .bx-next {
      background: url(img/right-arrow.png) center center no-repeat !important
    }

    #block-views-front-portfolio-block-2 {
      display: block
    }

    #block-views-front-portfolio-block-2 .bx-controls {
      top: 0
    }

    .contactsmap h2 {
      font-size: 25px
    }
  }

  @media screen and (max-width:480px) {
    .top-services {
      text-align: center;
      background: 0 0;
      padding: 21px 0;
      margin-bottom: 5px;
      color: #343333;
      padding-bottom: 26px;
      border-bottom: 1px solid #ccc
    }

    .top-services img {
      display: block;
      float: left
    }

    .shortdesc {
      display: block;
      min-height: auto;
      margin-bottom: 0;
      padding: 15px;
      padding-top: 0;
      padding-bottom: 15px
    }

    .top-services h4 {
      color: #343333;
      text-align: left;
      padding: 0 10px;
      padding-left: 63px;
      padding-top: 0;
      font-size: 21px;
      margin-top: 0
    }

    .shortdesc p {
      font-size: 13px;
      margin-bottom: 0;
      text-align: left
    }

    #block-block-1 {
      padding-bottom: 0
    }

    .ourblogs h3 {
      font-size: 40px
    }

    .ourblogs {
      display: none
    }
  }

  .collapsed-nav .navbar-nav>li.get-quote-link a {
    background: #f19830;
    border: 2px solid;
    border-radius: 35px;
    padding: 10px 25px;
    text-transform: uppercase;
    font-size: 18px;
    display: block;
    text-align: center;
    margin-top: 12px;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
  }
ul.tc-menu li {
    display: block !important;
    width: 100%;
}

@media only screen and (max-width: 1400px) and (min-width: 1300px)  
{
    ul.secondary li.last.leaf a {
    padding: 7px 12px;
    font-size: 12px;
     }
}
@media only screen and (max-width: 1300px) and (min-width: 990px)  
{
    ul.secondary li.last.leaf a {
    display:none;
     }
}

@media only screen and (max-width: 1200px) and (min-width: 990px)  
{
.navbar-nav>li>a {
    padding: 18px 6px;
    font-size: 18px;
}
}

@media (min-width: 991px){

.content-london-based #block-block-2 {margin-top: 35px;}

.large-screen {display: block;}

.small-screen {display: none;}

.navbar-header.custom-header {display: none;}

.block-image::after {
  content: "";
  border-bottom: 3px solid #37cea6;
  position: absolute;
  bottom: -30px;
  width: 40px;
}

}

@media (max-width: 767px) {

.page-header.mobile-page-header {
  text-align: center;
  font-size: 14px;
}

.page-header.mobile-page-header span {
  text-align: center;
  font-size: 30px;
  display: block;
  margin-top: 10px;
}

.block-image::after { display: none; }

.navbar-nav>li>a .caret{
    position: absolute;
    right: 0;
    background-position: right;
    width: 100%;
}

}

</style><style>

.testimonialslider {
  clear: both;
  padding: 0 0 20px 0;
}

.testimonialslider h2 {
  color: #3e3d4e;
  font-weight: 800;
  font-family: 'Poppins', sans-serif;
  font-size: 47px;
  text-align: center;
  margin-top: 10px;
  margin-bottom: 20px;
  background: url(img/middle-hang-bg.png) top center no-repeat;
  padding-top: 200px;
}

.view-testimonialslider .bx-viewport::before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  top: 30px;
  width: 100%;
  height: 100%;
  background: #f3f4f5;
}

.testimonialslider .views-field-field-image {
  width: 100px;
  height: 100px;
  margin-left: 0;
  margin-right: 0;
  border-radius: 10px;
  overflow: hidden;
  margin-top: 25px;
}

.testimonialslider .views-field-body {
  font-size: 16px;
  font-weight: 300;
  font-style: italic;
  color: #3e3d4e;
  padding: 20px;
}

.testimonialslider .views-field.views-field-field-designation .field-content {
  font-size: 15px;
  font-weight: 300;
  font-style: italic;
  color: #3e3d4e;
  text-transform: none;
  padding-bottom: 15px;
}

.testimonialslider .views-field.views-field-title h4.field-content {
  color: #3e3d4e;
  font-size: 18px;
  font-weight: 800;
  margin: 10px auto;
}

.view-testimonialslider .bx-controls {
  max-width: 100%;
  position: relative;
  margin-left: auto;
  margin-right: 0;
  text-align: center;
}

.view-testimonialslider .bx-controls .bx-pager-item {
  display: inline-block;
  padding: 0;
  background: transparent;
  margin: 0 3px;
}

.view-testimonialslider .bx-controls .bx-pager-item a {
  background: #d9d9d9;
  font-size: 0;
  padding: 5px;
  display: block;
  border-radius: 10px;
}

.view-testimonialslider .bx-controls .bx-pager-item a.active {
  background: #00c2e5;
}

.fivestar-basic {clear: both;}

.fivestar-basic .star {
  padding: 10px;
  background: url(img/star-black.png) no-repeat center;
    background-size: auto;
  display: inline-block;
  background-size: 20px;
}

@media screen and (max-width: 768px) {

.testimonialslider h2 {font-size: 42px;}

.testimonialslider .views-field-field-image {margin: 0 auto 12px;}

.view-testimonialslider .bx-controls {margin: 0 auto 12px;}

.testimonialslider .views-field.views-field-field-designation .field-content, .testimonialslider .views-field.views-field-title h4.field-content {
  text-align: center;
}

.fivestar-basic {
  width: 120px;
  text-align: center;
  margin: 0 auto;
}

}

@media (min-width: 768px) {

.view-testimonialslider .col-sm-3 {float: right;}

.view-testimonialslider .bx-viewport::before {
  content: "";
  width: 80%;
  position: absolute;
  left: 0;
  top: 0;
}

}

</style><script async src="https://www.googletagmanager.com/gtag/js?id=UA-41073025-1"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','UA-41073025-1');</script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='../www.googletagmanager.com/gtm5445.php?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-NLTGJT4');</script>
<link rel="profile" href="http://www.w3.org/1999/xhtml/vocab"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if IE]><![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="shortcut icon" href="img/webchoice_icon.webp" type="image/png"/>
<meta name="description" content="Web Choice UK is an award-winning web development and digital marketing company - Giving outstanding results through branding, web design, web development and result oriented SEO and online marketing."/>
<meta name="keywords" content="web design UK, web development company,web development UK, web development agency, web design company UK"/>
<link rel="image_src" href="img/smilefb.png"/>
<link rel="canonical" href="index.php"/>
<link rel="shortlink" href="index.php"/>
<meta property="og:site_name" content="Web Choice UK"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="https://www.webdesignchoice.co.uk/"/>
<meta property="og:title" content="Web Choice UK"/>
<meta property="og:image" content="https://www.webdesignchoice.co.uk/img/smilefb.png"/>
<meta property="og:image:url" content="https://www.webdesignchoice.co.uk/img/smilefb.png"/>
<meta property="og:image:secure_url" content="https://www.webdesignchoice.co.uk/img/smilefb.png"/>
<title>Web Development Company UK | Web Design Company London</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body class="front">
<div class="header-wrapper">
<noscript><iframe src="https://www.googletagmanager.com/ns.php?id=GTM-NLTGJT4" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<header id="navbar" class="navbar">
<div class="container">
<div class="row small-screen">
<div class="navbar-header">
<div class="navbar-collapse collapse collapsed-nav navsmallhead" id="navbar-collapse">
<nav>
<ul class="menu nav navbar-nav">
<li class="first leaf  "><a href="about.php" class="">About</a></li>
<li class="last expanded dropdown">
<a href="services.php" class="dropdown-toggle">Services <span class="caret"></span></a>
<ul class="dropdown-menu">
<li class="first expanded dropdown-submenu">
<a href="responsive-web-design.php" class="dropdown-toggle active"><span class="caret"></span>Responsive Web Design</a>
<ul class="dropdown-menu">
<li class="first leaf"><a href="wordpress-website.php"><span class="caret"></span>Wordpress Websites</a></li>
<li class="leaf"><a href="e-commerce-websites.php"><span class="caret"></span>Ecommerce Websites</a></li>
<li class="leaf"><a href="custom-cms-websites.php"><span class="caret"></span>Custom CMS Websites</a></li>
<li class="last leaf"><a href="drupal-website.php"><span class="caret"></span>Drupal Websites</a></li>
</ul>
</li>
<li class="expanded dropdown-submenu">
<a href="web-development-company.php" class="dropdown-toggle"><span class="caret"></span>Bespoke Web Development</a>
<ul class="dropdown-menu">
<li class="first last leaf"><a href="online-training-software.php"><span class="caret"></span>Online Training Software</a></li>
</ul>
</li>
<li class="expanded dropdown-submenu">
<a href="seo-agency-london.php" class="dropdown-toggle"><span class="caret"></span>SEO &amp; Rank High</a>
<ul class="dropdown-menu">
<li class="first leaf"><a href="local-seo-services-london.php"><span class="caret"></span>Local SEO Services</a></li>
<li class="leaf"><a href="seo-consultant-london.php"><span class="caret"></span>SEO Consultancy</a></li>
<li class="leaf"><a href="seo-packages-uk.php"><span class="caret"></span>SEO Packages UK</a></li>
<li class="leaf"><a href="enterprise-seo-services.php"><span class="caret"></span>Enterprise SEO Services</a></li>
<li class="leaf"><a href="b2b-seo-agency-london.php"><span class="caret"></span>B2B SEO Services </a></li>
<li class="last leaf"><a href="saas-seo-agency-london-uk.php"><span class="caret"></span>SaaS SEO Solutions</a></li>
</ul>
</li>
<li class="leaf"><a href="social-media-marketing.php">Social Media Marketing</a></li>
<li class="leaf"><a href="pay-per-click.php">Pay Per Click</a></li>
<li class="expanded dropdown-submenu">
<a href="app-development.php" class="dropdown-toggle"><span class="caret"></span>App Development</a>
<ul class="dropdown-menu">
<li class="first leaf"><a href="mobile-app-development.php"><span class="caret"></span>Mobile App Development</a></li>
<li class="last leaf"><a href="web-app-development.php"><span class="caret"></span>Web App Development</a></li>
</ul>
</li>
<li class="leaf"><a href="copywriting-services.php">Copywriting Services</a></li>
<li class="last leaf"><a href="video-creation.php">Video Creation</a></li>
</ul>
</li>
<li class="last expanded dropdown">
<a href="#" class="dropdown-toggle">Pricing <span class="caret"></span></a>
<ul class="dropdown-menu">
<li class="leaf"><a href="website-pricing.php">Website Pricing</a></li>
<li class="leaf"><a href="seo-pricing.php">SEO Pricing</a></li>
</ul>
</li>
</ul>
<ul class="menu nav navbar-nav secondary">
<li class="last expanded dropdown ">
<a class="dropdown-toggle " href="javascript:void(0)" title="">Results<span class="caret"></span></a>
<ul class="dropdown-menu">
<li class="leaf"><a href="portfolio.php">Portfolio</a></li>
<li class="leaf"><a class="" href="seo-web-reviews.php">SEO & Web Reviews</a></li>
</ul>
</li>
<li class="leaf franchise-menu-item"><a href="web-design-franchise.php">Franchise</a></li>
<li class="last expanded dropdown">
<a href="#" class="dropdown-toggle">Resources <span class="caret"></span></a>
<ul class="dropdown-menu">
<li class="leaf"><a href="#" target="_blank">Podcasts & Videos</a></li>
<li class="leaf"><a href="blogs-and-articles.php">Useful Articles</a></li>
<li class="leaf"><a href="guide.php">Free Guides</a></li>
<li class="leaf"><a href="press-release.php">Awards & PR</a></li>
</ul>
</li>
<li class="last get-quote-link leaf"><a href="contact.php">Log in</a></li>
</ul>
</nav>
</div>
<a class="logo navbar-btn" href="index.php" title="Home">
<img src="img\w2s-logo.jpeg" alt="Home" width="150" height="30" style="mix-blend-mode:darken";>
</a>
</div>
</div>
<div class="row large-screen">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<a class="logo navbar-btn" href="index.php" title="Home">
<img src="img\w2s-logo.jpeg" alt="Home" width="150" height="30" style="mix-blend-mode:darken";>
</a>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<div class="navbar-collapse collapse" id="navbar-collapse">
<nav>
<ul class="menu nav navbar-nav">
<ul class="menu nav navbar-nav">
<li class="first leaf"><a href="about.php" class="">About</a></li>
<li class="last expanded dropdown">
<a href="services.php" class="dropdown-toggle">Services <span class="caret"></span></a>
<ul class="dropdown-menu">
<li class="first expanded dropdown-submenu">
<a href="responsive-web-design.php" class="dropdown-toggle"><span class="caret"></span>Responsive Web Design</a>
<ul class="dropdown-menu">
<li class="first leaf"><a href="wordpress-website.php"><span class="caret"></span>Wordpress Websites</a></li>
<li class="leaf"><a href="e-commerce-websites.php"><span class="caret"></span>Ecommerce Websites</a></li>
<li class="leaf"><a href="custom-cms-websites.php"><span class="caret"></span>Custom CMS Websites</a></li>
<li class="last leaf"><a href="drupal-website.php"><span class="caret"></span>Drupal Websites</a></li>
</ul>
</li>
<li class="expanded dropdown-submenu">
<a href="web-development-company.php" class="dropdown-toggle"><span class="caret"></span>Bespoke Web Development</a>
<ul class="dropdown-menu">
<li class="first last leaf"><a href="online-training-software.php"><span class="caret"></span>Online Training Software</a></li>
</ul>
</li>
<li class="expanded dropdown-submenu">
<a href="seo-agency-london.php" class="dropdown-toggle"><span class="caret"></span>SEO &amp; Rank High</a>
<ul class="dropdown-menu">
<li class="first leaf"><a href="local-seo-services-london.php"><span class="caret"></span>Local SEO Services</a></li>
<li class="leaf"><a href="seo-consultant-london.php"><span class="caret"></span>SEO Consultancy</a></li>
<li class="leaf"><a href="seo-packages-uk.php"><span class="caret"></span>SEO Packages UK</a></li>
<li class="leaf"><a href="enterprise-seo-services.php"><span class="caret"></span>Enterprise SEO Services</a></li>
<li class="leaf"><a href="b2b-seo-agency-london.php"><span class="caret"></span>B2B SEO Services </a></li>
<li class="last leaf"><a href="saas-seo-agency-london-uk.php"><span class="caret"></span>SaaS SEO Solutions</a></li>
</ul>
</li>
<li class="leaf"><a href="social-media-marketing.php">Social Media Marketing</a></li>
<li class="leaf"><a href="pay-per-click.php">Pay Per Click</a></li>
<li class="expanded dropdown-submenu">
<a href="app-development.php" class="dropdown-toggle"><span class="caret"></span>App Development</a>
<ul class="dropdown-menu">
<li class="first leaf"><a href="mobile-app-development.php"><span class="caret"></span>Mobile App Development</a></li>
<li class="last leaf"><a href="web-app-development.php"><span class="caret"></span>Web App Development</a></li>
</ul>
</li>
<li class="leaf"><a href="copywriting-services.php">Copywriting Services</a></li>
<li class="last leaf"><a href="video-creation.php">Video Creation</a></li>
</ul>
</li>
<li class="last expanded dropdown">
<a href="#" class="dropdown-toggle">Pricing <span class="caret"></span></a>
<ul class="dropdown-menu">
<li class="leaf"><a href="website-pricing.php">Website Pricing</a></li>
<li class="leaf"><a href="seo-pricing.php">SEO Pricing</a></li>
</ul>
</li>
</ul>
</ul>
</nav>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<div class="navbar-collapse collapse" id="navbar-collapse">
<nav>
<ul class="menu nav navbar-nav secondary">
<ul class="menu nav navbar-nav secondary">
<li class="last expanded dropdown ">
<a class="dropdown-toggle " href="javascript:void(0)" title="">Results<span class="caret"></span></a>
<ul class="dropdown-menu">
<li class="leaf"><a href="portfolio.php">Portfolio</a></li>
<li class="leaf"><a class="" href="seo-web-reviews.php">SEO & Web Reviews</a></li>
</ul>
</li>
<li class="leaf franchise-menu-item"><a href="web-design-franchise.php">Franchise</a></li>
<li class="last expanded dropdown">
<a href="#" class="dropdown-toggle">Resources <span class="caret"></span></a>
<ul class="dropdown-menu">
<li class="leaf"><a href="#" target="_blank">Podcasts & Videos</a></li>
<li class="leaf"><a href="blogs-and-articles.php">Useful Articles</a></li>
<li class="leaf"><a href="guide.php">Free Guides</a></li>
<li class="leaf"><a href="press-release.php">Awards & PR</a></li>
</ul>
</li>
<li class="last leaf"><a href="contact.php">Log in</a></li>
</ul>
</ul>
</nav>
</div>
</div>
</div>
</div>
</header>