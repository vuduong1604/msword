<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        *{
            
        }
        .dropbtn {
            background-color: #3498DB;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        
        .dropbtn:hover,
        .dropbtn:focus {
            background-color: #2980B9;
        }
        
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        
        .dropdown a:hover {
            background-color: #ddd;
        }
        
        .show {
            display: block;
        }

        .content{
            margin-top: 120px;
            margin-left: 63px;
            
        }
    </style>
</head>

<body>

    <div style="background-color: rgb(206, 138, 138);" class="header">
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">File</button>
            <div id="myfile" class="dropdown-content">
                <a href="#">Info</a>
                <a href="#">Save</a>
                <a href="#">Save as</a>
            </div>
        </div>

        <div class="dropdown">
            <button onclick="myFunction1()" class="dropbtn">Home</button>
            <div id="myDropdown" class="dropdown-content">
                <div style="width: 800px;">
                    <table id="customers" style="width: 800px;">
                        <tr width="10%">
                            <td> <input type="text" placeholder="Times New Roman"> <input type="text" placeholder="11" style="width:50px">
                                <button type="button" onclick="alert('')">L???n</button>
                                <button type="button" onclick="alert('')">Nh???</button>
                                <button type="button" onclick="alert('')">Hoa/th?????ng</button>
                            </td>

                            <td>
                                <button type="button" onclick="alert('')">Bullet</button>
                                <button type="button" onclick="alert('')">Numbering</button>
                                <button type="button" onclick="alert('')">Multiple</button>
                                <button type="button" onclick="alert('')">gi??n d??ng</button>
                            </td>
                        </tr>
                        <tr width="25%">
                            <td><button type="button" onclick="alert('')">in d???m</button>
                                <button type="button" onclick="alert('')">in nghi??ng</button>
                                <button type="button" onclick="alert('')">g???ch ch??n</button>
                                <button type="button" onclick="alert('')">ch??? s??? tr??n</button>
                                <button type="button" onclick="alert('')">ch??? s??? d?????i</button>
                            </td>


                            <td>
                                <button type="button" onclick="alert('')">c??n tr??i</button>
                                <button type="button" onclick="alert('')">c??n gi???a</button>
                                <button type="button" onclick="alert('')">c??n ph???i</button>
                                <button type="button" onclick="alert('')">c??n hai b??n</button>
                                <button type="button" onclick="alert('')">boder</button>
                            </td>
                        </tr>
                        <tr width="25%">
                            <td>
                                <p style="text-align: center">Font</p>
                            </td>
                            <td></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>

        <div class="dropdown">
            <button onclick="myFunction2()" class="dropbtn">Insert</button>
            <div id="myinsert" class="dropdown-content">
                <div style="width: 800px;">
                    <table id="customers" style="width: 800px; height:60px;">
                        <tr width="10%">
                            <td>
                                <button type="button" onclick="alert('')"><picture>pic</picture></button>
                                <button type="button" onclick="alert('')">table</button>

                            </td>


                        </tr>

                    </table>
                </div>
            </div>
        </div>

        <div class="dropdown">
            <button onclick="myFunction3()" class="dropbtn">Layout</button>
            <div id="mylayout" class="dropdown-content">

            </div>
        </div>
    </div>


    <div class="content" aria-placeholder="vi???t v??o ????y">
        <textarea style="width: 793px; height: 1122px; "></textarea>
    </div>

    <script>
        onloadstart(
            myFunction1() 
        )
        /* Khi ng?????i d??ng nh???p v??o n??t, h??y chuy???n ?????i gi???a ???n v?? hi???n th??? n???i dung th??? xu???ng */
        function myFunction() {
            document.getElementById("myfile").classList.toggle("show");
        }

        function myFunction1() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function myFunction2() {
            document.getElementById("myinsert").classList.toggle("show");
        }

        function myFunction3() {
            document.getElementById("mylayout").classList.toggle("show");
        }

        // ????ng menu th??? xu???ng n???u ng?????i d??ng nh???p v??o b??n ngo??i
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {}
                }
            }
        }
    </script>

    <!-- <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script> -->

</body>

</html>