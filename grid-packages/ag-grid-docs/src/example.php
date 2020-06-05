<?php
$navKey = "demo";
require "example-runner/example-runners.php";
include_once 'includes/html-helpers.php';
?>
<!DOCTYPE html>
<html lang="en" class="stretch-html">
<head>
<meta http-equiv="Content-Security-Policy" content="default-src 'self' https://*; script-src 'self' 'unsafe-eval' 'unsafe-inline' https://*; style-src 'self' 'unsafe-inline' blob: https://*; img-src 'self' data: https://*; font-src 'self' data: https://*">
<?php
meta_and_links("Demo of ag-Grid: Datagrid with 63 features and great performance", "react angular angularjs data grid example", "ag-Grid is a feature-rich datagrid available in Free or Enterprise versions. This is our fully interactive demo showcasing all of our features and our performance with large datasets.", false);
?>
<link rel="stylesheet" href="./dist/homepage.css">
</head>

<body>
<header id="nav" class="compact">
<?php 
    $version = 'latest';
    include './includes/navbar.php';
 ?>
</header>
<main id="example-wrapper" class="page-content">
    <div class="example-toolbar collapsed">
        <div class="options-container">
            <div>
                <label for="data-size">Data Size:</label>
                <select onchange="onDataSizeChanged(this.value)" id="data-size">
                </select>

                <span id="message" style="margin-left: 10px;">
                    <i class="fa fa-spinner fa-pulse fa-fw margin-bottom"></i>
                </span>
            </div>
            <div>
                <label for="grid-theme">Theme:</label>

                <select onchange="onThemeChanged()" id="grid-theme">
                    <option value="">-none-</option>
                    <option value="ag-theme-alpine" selected>Alpine</option>
                    <option value="ag-theme-alpine-dark">Alpine Dark</option>
                    <option value="ag-theme-balham">Balham</option>
                    <option value="ag-theme-balham-dark">Balham Dark</option>
                    <option value="ag-theme-material">Material</option>
                </select>

                <script>
                    (function() {
                        var themeDropdown = document.querySelector('#grid-theme');
                        var match = document.location.search.match(/[?&]theme=([\w-]+)?/);
                        if (match) {
                            var theme = match[1] || 'ag-theme-none';
                            themeDropdown.value = theme;
                            if (theme !== 'ag-theme-none') {
                                if (!themeDropdown.querySelector('option[value="' + theme + '"]')) {
                                    themeDropdown.insertAdjacentHTML('beforeend', '<option>' + theme + '</option>');
                                }
                                themeDropdown.value = theme;
                            } else {
                                themeDropdown.value = '';
                            }
                        }
                    })();
                </script>
            </div>
            <div>
                <label for="global-filter">Filter:</label>
                <input 
                placeholder="Filter any column..." type="text"
                oninput="onFilterChanged(this.value)"
                ondblclick="filterDoubleClicked(event)"
                class="hide-when-small"
                id="global-filter"
                style="flex: 1"
                />
            </div>
            <div class="video-tour">
                <a href="https://youtu.be/29ja0liMuv4" target="_blank">Take a video tour</a>
            </div>
        </div>
    </div>
    <div class="options-expander">
        <span id="messageText"></span>
        <div class="options-toggle" onclick="toggleOptionsCollapsed()"><span>&nbsp;</span>OPTIONS</div>
        <span>&nbsp;</span>
    </div>

    <!-- The table div -->
    <section id="grid-wrapper" style="padding: 1rem; padding-top: 0;">
        <div id="myGrid" style="height: 100%; overflow: hidden;" class="ag-theme-alpine"></div>
    </section>
</main> <!-- example wrapper -->

<?= globalAgGridScript(true) ?>

<script src="dist/homepage.js"></script>
<script src="example.js"></script>

</body>
</html>
