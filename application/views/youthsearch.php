<!-- light-blue - v3.1.0 - 2014-12-06 -->

<!DOCTYPE html>
<html>
<head>
    <title>Light Blue - Responsive Admin Dashboard Template</title>

        <link href="css/application.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                      https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
</head>
<body class="background-dark">
    <?php if ($user_profile):?>
    <div class="logo">
        <h4><a href="index.html">Light <strong>Blue</strong></a></h4>
    </div>
    <nav id="sidebar" class="sidebar nav-collapse collapse">
            <ul id="side-nav" class="side-nav">
                <li class="active">
                    <a href="<?php echo base_url('rprofile');?>"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
                </li>
                <li class="">
                    <a href="<?php echo site_url('statistics');?>"><i class="fa fa-area-chart"></i> <span class="name">Statistics</span></a>
                </li>
                <li class="">
                    <a href="index.html"><i class="fa fa-th"></i> <span class="name">Notifications</span></a>
                </li>
                <li class="">
                    <a href="<?php echo site_url('calender');?>"><i class="fa fa-calendar"></i> <span class="name">Calender</span></a>
                </li>
                <li class="">
                    <a href="index.html"><i class="fa fa-inbox"></i> <span class="name">Inbox</span></a>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#ui-collapse"><i class="fa fa-magic"></i> <span class="name">Search</span></a>
                    <ul id="ui-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="<?php echo site_url('youthsearch');?>">Unemployed Youth</a></li>
                        <li class=""><a href="ui_dialogs.html">Jobs</a></li>
                    </ul>
                </li>
                <li class="visible-xs">
                    <a href="<?= site_url('logout'); ?>"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
                    <p><?php echo anchor("$logout_url",'<span class="name"><i class="fa fa-sign-out" style="color:white"></i>Sign Out</span>' ) ?></p>
                </li>
            </ul>
        
            <h5 class="sidebar-nav-title">Projects</h5>
            <!-- A place for sidebar notifications & alerts -->
            <div class="sidebar-alerts">
                <div class="alert fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                    <span class="text-white fw-semi-bold">Sales Report</span> <br>
                    <div class="progress progress-xs mt-xs mb-0">
                        <div class="progress-bar progress-bar-gray-light" style="width: 16%"></div>
                    </div>
                    <small>Calculating x-axis bias... 65%</small>
                </div>
                <div class="alert fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                    <span class="text-white fw-semi-bold">Personal Responsibility</span> <br>
                    <div class="progress progress-xs mt-xs mb-0">
                        <div class="progress-bar progress-bar-danger" style="width: 23%"></div>
                    </div>
                    <small>Provide required notes</small>
                </div>
            </div>
            
            <h5 class="sidebar-nav-title">Sponsors</h5>
            <!-- A place for sidebar notifications & alerts -->
            <div class="sidebar-alerts">
                <div class="alert fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                    <span class="text-white fw-semi-bold">Sales Report</span> <br>
                    <div class="progress progress-xs mt-xs mb-0">
                        <div class="progress-bar progress-bar-gray-light" style="width: 16%"></div>
                    </div>
                    <small>Calculating x-axis bias... 65%</small>
                </div>
                <div class="alert fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                    <span class="text-white fw-semi-bold">Personal Responsibility</span> <br>
                    <div class="progress progress-xs mt-xs mb-0">
                        <div class="progress-bar progress-bar-danger" style="width: 23%"></div>
                    </div>
                    <small>Provide required notes</small>
                </div>
            </div>
        
        </nav> 
    <div class="wrap">
        <header class="page-header">
            <div class="navbar">
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="visible-phone-landscape">
                        <a href="#" id="search-toggle">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" title="Messages" id="messages"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-comments"></i>
                        </a>
                        <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/1.jpg" alt="">
                                    <div class="details">
                                        <div class="sender">Jane Hew</div>
                                        <div class="text">
                                            Hey, John! How is it going? ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/2.jpg" alt="">
                                    <div class="details">
                                        <div class="sender">Alies Rumiancaŭ</div>
                                        <div class="text">
                                            I'll definitely buy this template
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/3.jpg" alt="">
                                    <div class="details">
                                        <div class="sender">Michał Rumiancaŭ</div>
                                        <div class="text">
                                            Is it really Lore ipsum? Lore ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all messages <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" title="8 support tickets"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-group"></i>
                            <span class="count">8</span>
                        </a>
                        <ul id="support-menu" class="dropdown-menu support" role="menu">
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-bell-o"></i></span>
                                    </div>
                                    <div class="details">
                                        Check out this awesome ticket
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-warning"><i class="fa fa-question-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        "What is the best way to get ...
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-success"><i class="fa fa-tag"></i></span>
                                    </div>
                                    <div class="details">
                                        This is just a simple notification
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-info"><i class="fa fa-info-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        12 new orders has arrived today
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="details">
                                        One more thing that just happened
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all tickets <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="hidden-xs">
                        <a href="#" id="settings"
                           title="Settings"
                           data-toggle="popover"
                           data-placement="bottom">
                            <i class="fa fa-cog"></i>
                        </a>
                    </li>
                    <li class="hidden-xs dropdown">
                        <a href="#" title="Account" id="account"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                        </a>
                        <ul id="account-menu" class="dropdown-menu account" role="menu">
                            <li role="presentation" class="account-picture">
                                <img src="img/2.jpg" alt="">
                                Philip Daineka
                            </li>
                            <li role="presentation">
                                <a href="form_account.html" class="link">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="component_calendar.html" class="link">
                                    <i class="fa fa-calendar"></i>
                                    Calendar
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="link">
                                    <i class="fa fa-inbox"></i>
                                    Inbox
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="visible-xs">
                        <a href="#"
                           class="btn-navbar"
                           data-toggle="collapse"
                           data-target=".sidebar"
                           title="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="hidden-xs"><a href="login.html"><i class="fa fa-sign-out"></i></a></li>
                </ul>
                <form id="search-form" class="navbar-form pull-right" role="search">
                    <input type="search" class="form-control search-query" placeholder="Search...">
                </form>
                <div class="notifications pull-right">
                    <div class="alert pull-right">
                        <a href="#" class="close ml-xs" data-dismiss="alert">&times;</a>
                        <i class="fa fa-info-circle mr-xs"></i> Check out Light Blue <a id="notification-link" href="#">settings</a> on the right!
                    </div>
                </div>
            </div>
        </header>        
        <div class="content container">
        <h2 class="page-title">Tables - <span class="fw-semi-bold">Dynamic</span></h2>
        
        <section class="widget">
            <header>
                <h4>Havana <span class="fw-semi-bold">Youth</span></h4>
                <div class="widget-controls">
                    <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                    <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </header>
            <div class="body">
                <p>
                    <a href="http://www.datatables.net/" target="_blank">Get your preffered candidate now</a>
                </p>
                <div class="mt">
                    <table id="datatable-table" class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th class="no-sort hidden-xs">Info</th>
                            <th class="hidden-xs">Description</th>
                            <th class="hidden-xs">Date</th>
                            <th class="no-sort">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><span class="fw-semi-bold">Algerd</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; JPEG
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 200x150
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Palo Alto</a></td>
                            <td class="hidden-xs">June 27, 2013</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar progress-bar-success" style="width: 29%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><span class="fw-semi-bold">Vitaut</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; PNG
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 6433x4522
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Vilnia</a></td>
                            <td class="hidden-xs">January 1, 1442</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar progress-bar-danger" style="width: 19%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><span class="fw-semi-bold">Honar</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; AVI
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 1440x980
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Berlin</a></td>
                            <td class="hidden-xs">August 6, 2013</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar progress-bar-gray-light" style="width: 49%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><span class="fw-semi-bold">Jack</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; PNG
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 12x43
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">San Francisco</a></td>
                            <td class="hidden-xs">August 19, 2013</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar" style="width: 69%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><span class="fw-semi-bold">Leon</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; MP4
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 800x480
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Brasilia</a></td>
                            <td class="hidden-xs">October 1, 2013</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar progress-bar-gray-light" style="width: 9%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><span class="fw-semi-bold">Max</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; TXT
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; -
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Helsinki</a></td>
                            <td class="hidden-xs">October 29, 2013</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar progress-bar-warning" style="width: 38%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><span class="fw-semi-bold">Pol</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; MOV
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 640x480
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Radashkovichi</a></td>
                            <td class="hidden-xs">November 11, 2013</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar progress-bar-danger" style="width: 83%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><span class="fw-semi-bold">Chrishna</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; DOC
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; -
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Mumbai</a></td>
                            <td class="hidden-xs">December 2, 2013</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar progress-bar-info" style="width: 40%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td><span class="fw-semi-bold">Leslie</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; AVI
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 4820x2140
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Singapore</a></td>
                            <td class="hidden-xs">December 6, 2013</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar progress-bar-warning" style="width: 18%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td><span class="fw-semi-bold">David</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; XML
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; -
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Portland</a></td>
                            <td class="hidden-xs">December 13, 2013</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar progress-bar-gray-light" style="width: 54%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td><span class="fw-semi-bold">Andrej</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; VOB
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 6433x4522
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Minsk</a></td>
                            <td class="hidden-xs">December 14, 2013</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar" style="width: 25%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td><span class="fw-semi-bold">Julia</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; JPEG
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 40x40
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Hrodna</a></td>
                            <td class="hidden-xs">July 9, 2012</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td><span class="fw-semi-bold">Ihnat</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; JAVA
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; -
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Los Angeles</a></td>
                            <td class="hidden-xs">August 2, 2012</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar progress-bar-success" style="width: 8%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td><span class="fw-semi-bold">Abraham</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; DOCX
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; -
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Panama</a></td>
                            <td class="hidden-xs">September 3, 2012</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar progress-bar-gray-light" style="width: 80%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td><span class="fw-semi-bold">Tomas</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; JPEG
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 1800x1420
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Amsterdam</a></td>
                            <td class="hidden-xs">November 13, 2012</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar progress-bar-gray-light" style="width: 10%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td><span class="fw-semi-bold">Scott</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; PNG
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 240x460
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Sluck</a></td>
                            <td class="hidden-xs">December 5, 2012</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar" style="width: 93%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td><span class="fw-semi-bold">Pham</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; MAIL
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; -
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Tokyo</a></td>
                            <td class="hidden-xs">December 8, 2012</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar progress-bar-danger" style="width: 44%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td><span class="fw-semi-bold">Peter</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; PNG
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 8320x6400
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Cape Town</a></td>
                            <td class="hidden-xs">December 29, 2012</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar progress-bar-gray-light" style="width: 5%;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td><span class="fw-semi-bold">Uladz'</span></td>
                            <td class="hidden-xs">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; JPEG
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 2200x1600
                                </small>
                            </td>
                            <td class="hidden-xs"><a href="#">Mahileu</a></td>
                            <td class="hidden-xs">December 7, 2013</td>
                            <td class="width-150">
                                <div class="progress progress-sm mt-xs">
                                    <div class="progress-bar progress-bar-gray-light" style="width: 0%;"></div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        </div>
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
    </div>
<!-- common libraries. required for every page-->
<script src="assets/lib/jquery/dist/jquery.min.js"></script>
<script src="assets/lib/jquery-pjax/jquery.pjax.js"></script>
<script src="assets/lib/bootstrap-sass-official/assets/javascripts/bootstrap.js"></script>
<script src="assets/lib/widgster/widgster.js"></script>
<script src="assets/lib/underscore/underscore.js"></script>

<!-- common application js -->
<script src="assets/js/app.js"></script>
<script src="assets/js/settings.js"></script>

<!-- common templates -->
<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Background</div>
        <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% dark = background == 'dark'; light = background == 'light';%>
            <button type="button" data-value="dark" class="btn btn-sm btn-default <%= dark? 'active' : '' %>">Dark</button>
            <button type="button" data-value="light" class="btn btn-sm btn-default <%= light? 'active' : '' %>">Light</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="../white/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>

    <!-- page specific scripts -->
        <!-- page specific libs -->
        <script src="assets/lib/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="assets/lib/underscore/underscore.js"></script>
        <script src="assets/lib/backbone/backbone.js"></script>
        <script src="assets/lib/backbone.paginator/lib/backbone.paginator.min.js"></script>
        <script src="assets/lib/backgrid/lib/backgrid.min.js"></script>
        <script src="assets/lib/backgrid-paginator/backgrid-paginator.js"></script>
        <script src="assets/lib/datatables/media/js/jquery.dataTables.min.js"></script>

        <!-- page application js -->
        <script src="assets/js/tables-dynamic.js"></script>
        <?php else: ?>
        <?php base_url('signin');?>
        <?php endif; ?>
</body>
</html>