<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Microsoft-Word</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a29e42302e.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <style>
        body {
            padding-top: 3rem;
            padding-bottom: 3rem;
            position: relative;
        }

        /**
  Word-Tab-Style
 */
        .word-style .nav {
            background-color: #2b579a;
        }

        .word-style .nav .nav-item a.active {
            color: #2b579a !important;
        }

        .word-style .nav .nav-item a:hover:not(.active) {
            background-color: #124078;
        }

        .microsoft-nav .nav .nav-item a {
            color: white;
            border: none;
            border-radius: 0;
        }

        .microsoft-nav .nav .nav-item a.active {
            background-color: #edebe9;
        }

        .microsoft-nav .nav .nav-item a:hover:not(.active) {
            color: white;
            border: none;
            border-radius: 0;
        }

        .microsoft-nav .tab-content {
            background-color: #edebe9 !important;
            z-index: 99;
            position: relative;
        }

        .microsoft-nav .tab-pane {
            background-color: #edebe9 !important;
            min-height: 80px;
            margin-top: -1px;
        }

        .microsoft-nav .tab-pane.active {
            background-color: #edebe9 !important;
            animation: slide-down 0.15s;
        }

        @keyframes slide-down {
            0% {
                opacity: 0;
                transform: translateX(-10px);
                background-color: #edebe9;
            }

            100% {
                opacity: 1;
                transform: translateX(0);
                background-color: #edebe9;
            }
        }

        @-webkit-keyframes slide-down {
            0% {
                opacity: 0;
                transform: translateX(-10px);
                background-color: #edebe9;
            }

            100% {
                opacity: 1;
                transform: translateX(0);
                background-color: #edebe9;
            }

        }

        .content {

            margin-left: 130px;

        }

        /*# sourceMappingURL=style.css.map */
    </style>


    <main role="main" class="container">
        <div data-spy="scroll" data-target="#nav" data-offset="0">
            <div class="row" id="word">
                <div class="col-md-12">
                    <div class="microsoft-nav word-style">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="word-home-tab" data-toggle="tab" href="#word_1" role="tab">File</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="word-profile-tab" data-toggle="tab" href="#word_2" role="tab">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="word-contact-tab" data-toggle="tab" href="#word_3" role="tab">Insert</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane " id="word_1" role="tabpanel" style="margin-left: 80px;">
                                <a href="#">Info</a><br>
                                <a href="#">Save</a><br>
                                <a href="#">Save as</a><br>
                            </div>
                            <div class="tab-pane active" id="word_2" role="tabpanel">
                                <table id="customers" style="width: 900px; margin-left: 80px;">
                                    <tr width="10%">
                                        <td><select id="fort">
                                                <option value="Arial" style="font-family: Arial;">Arial</option>
                                                <option value="Helvetica" style="font-family: Helvetica;">Helvetica</option>
                                                <option value="Open Sans">Open Sans</option>
                                                <option value="Time New Roman" selected>Time New Roman</option>
                                            </select>
                                            <select id="cars">
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16" selected>16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>

                                            </select>

                                            <button type="button" onclick="alert('')"><i class="fa-solid fa-a"></i></button>
                                            <button type="button" onclick="alert('')">A</i></button>
                                            <!-- <button type="button" onclick="alert('')">A/a</button> -->
                                        </td>

                                        <td>
                                            <button type="button" onclick="alert('')">Bullet</button>
                                            <button type="button" onclick="alert('')">Numbering</button>
                                            <button type="button" onclick="alert('')">Multiple</button>
                                            <button type="button" onclick="alert('')">Giãn Dòng</i></i></i></button>
                                        </td>
                                        <td rowspan="2">
                                            <div>
                                            <button type="button" onclick="alert('')"><img src="https://i.imgur.com/5rcNP6t.png" alt="Normal" width="105px" height="54px"></button>                                            
                                            <button type="button" onclick="alert('')"><img src="https://i.imgur.com/ClR31Cj.png" alt="No Spacing" width="105px" height="54px"></button>                                            
                                            <button type="button" onclick="alert('')"><img src="https://i.imgur.com/qXGV5td.png" alt="Headding 1" width="105px" height="54px"></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr width="25%">
                                        <td><button type="button" onclick="alert('')"><i class="fa-solid fa-bold"></i></button>
                                            <button type="button" onclick="alert('')"><i class="fa-solid fa-italic"></i></button>
                                            <button type="button" onclick="alert('')"><i class="fa-solid fa-underline"></i></button>
                                            <button type="button" onclick="alert('')">Chỉ số trên</button>
                                            <button type="button" onclick="alert('')">Chỉ số dưới</button>
                                        </td>


                                        <td>
                                            <button type="button" onclick="alert('')"><i class="fa-solid fa-align-left"></i></button>
                                            <button type="button" onclick="alert('')"><i class="fa-solid fa-align-center"></i></button>
                                            <button type="button" onclick="alert('')"><i class="fa-solid fa-align-right"></i></button>
                                            <button type="button" onclick="alert('')"><i class="fa-solid fa-align-justify"></i></button>
                                            <button type="button" onclick="alert('')"><i class="fa-solid fa-border-all"></i></button>
                                        </td>
                                    </tr>
                                    <tr width="25%">
                                        <td>
                                            <p style="text-align: center">Font</p>
                                        </td>
                                        <td>
                                            <p style="text-align: center">Paragraph</p>
                                        </td>
                                        <td>
                                            <p style="text-align: center">Styles</p>
                                        </td>
                                    </tr>

                                </table>

                            </div>
                            <div class="tab-pane " id="word_3" role="tabpanel">
                                <table id="customers" style="width: 800px; height:60px; margin-left: 80px;">
                                    <tr width="10%">
                                        <td>
                                            <button type="button" onclick="alert('')">
                                                <picture>pic</picture>
                                            </button>
                                            <button type="button" onclick="alert('')">table</button>

                                        </td>


                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="content" aria-placeholder="viết vào đây">
                <textarea style="width: 793px; height: 1122px; "></textarea>
            </div>


        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>