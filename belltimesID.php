<!DOCTYPE html><!--beta - just kidding beta just sounds more exclusive-->
<html>
<head>
    <title>Belltimes ID - Setup your timetable</title>
    <base href="/" />
    <link rel="shortcut icon" href="/assets/favicon.ico"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

    <meta name="description" content="Introducing Belltimes ID - Personalise your timetable and access them from any device with 1 tap." />
    <meta name="keywords" content="sbhs, bell, times, belltimes, sbhsbelltimes, sydneyboyshigh.asia, sydneyboyshigh.tk, sbhsbelltimes.tk, sbhsbelltimes.asia, asia, tk, countdown, sydney, boys, high, school, sydneyboys, sydneyboyshigh, sydneyboyshighschool, teacher, teachers, student, students">
    <meta name="author" content="Jerry Yip">
    <meta property="fb:admins" content="100001342239314" />
    <meta property="fb:app_id" content="266559516821504" />
    <meta property="og:title" content="SBHS Belltimes ID" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.sbhsbelltimes.tk" />
    <meta property="og:image" content="http://www.sbhsbelltimes.tk/assets/logo_big.jpg" />
    <meta property="og:description" content="Introducing Belltimes ID - all your school periods saved to the cloud, available anywhere with 1 click.">

    <link href='http://fonts.googleapis.com/css?family=Roboto:100,300|Roboto+Condensed' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="/scripts/animate-custom.css">
    <link rel="stylesheet" href="/scripts/responsive_id.css">

    <style>
        a.blue,button.blue,input[type=submit].blue{padding:10px 30px;-webkit-border-radius:2px;border:solid 1px #3079ed;background:#4d90fe;background:-moz-linear-gradient(top,#4d90fe 0,#4787ed 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#4d90fe),color-stop(100%,#4787ed));background:-webkit-linear-gradient(top,#4d90fe 0,#4787ed 100%);background:-o-linear-gradient(top,#4d90fe 0,#4787ed 100%);background:-ms-linear-gradient(top,#4d90fe 0,#4787ed 100%);background:linear-gradient(top,#4d90fe 0,#4787ed 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#4d90fe', endColorstr='#4787ed', GradientType=0);color:#fff;text-decoration:none;cursor:pointer;display:inline-block;text-align:center;font-weight:700;font-family:Arial,Helvetica,sans-serif;text-transform:uppercase;font-size:11px;line-height:1}a.blue:hover,button.blue:hover,input[type=submit].blue:hover{border:1px solid #2f5bb7;background:#4d90fe;background:-moz-linear-gradient(top,#4d90fe 0,#357ae8 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#4d90fe),color-stop(100%,#357ae8));background:-webkit-linear-gradient(top,#4d90fe 0,#357ae8 100%);background:-o-linear-gradient(top,#4d90fe 0,#357ae8 100%);background:-ms-linear-gradient(top,#4d90fe 0,#357ae8 100%);background:linear-gradient(top,#4d90fe 0,#357ae8 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#4d90fe', endColorstr='#357ae8', GradientType=0);-webkit-box-shadow:0 1px 1px #333;-moz-box-shadow:0 1px 1px #333;box-shadow:0 1px 1px #333}a.blue:active,button.blue:active,input[type=submit].blue:active{border:1px solid #377cea;-webkit-box-shadow:inset 0 0 2px 2px #377cea,0 1px 0 0 #aaa;-moz-box-shadow:inset 0 0 2px 2px #377cea,0 1px 0 0 #aaa;box-shadow:inset 0 0 2px 2px #377cea,0 1px 0 0 #aaa}
    </style>
</head>
<body style="background-color: #000000;">

<!-- -- FUNCTIONS -- -->
<!--begin fb-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=266559516821504";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!--end fb-->
<script>
    function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode( key );
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>
<script>
    function scrollToAnchor(aid){
        //show div
        document.getElementById(aid+'Div').style.display="block";
        //scroll
        var aTag = $("a[name='"+ aid +"']");
        $('html,body').animate({scrollTop: aTag.offset().top},'slow');
    }
</script>
<script>
    function disableBtn(e){
        ee=document.getElementById(e);
        ee.disabled=true;
        ee.style.background="#737373";
        ee.style.opacity="0.5";
    }
</script>
<script>
    $(document).ready(function(){
        updateDivHeight();
        //populateGrade();
    });
    $(window).resize(function() {
        updateDivHeight();
    });
    function updateDivHeight(){
        var noyceHeight=$(window).height()*0.94;
        $('#introDiv').height(noyceHeight);
        $('#mondayDiv').height(noyceHeight);
        $('#tuesdayDiv').height(noyceHeight);
        $('#wednesdayDiv').height(noyceHeight);
        $('#thursdayDiv').height(noyceHeight);
        $('#fridayDiv').height(noyceHeight);
        $('#finalDiv').height(noyceHeight);
    }
/*    function populateGrade(){
        var currentYr12 = new Date().getFullYear();
        var i = 1;
        for (var g=0;g++;g<=5){
            $("select[id='gradeInput']").append('<option value='+(currentYr12+g)+'>'+(currentYr12+g)+'</option>');
            console.log('<option value='+(currentYr12+g)+'>'+(currentYr12+g)+'</option>');
        }
        alert(currentYr12);
    }*/
</script>
<!-- -- END FUNCTIONS -- -->

<!-- -- //INTRO --- -->
<div id="container">
<div id="hero" class="animated flipInX">
    Belltimes ID <span style="opacity:0.8;font-weight:300;font-size:0.4em;vertical-align:middle;color:#ffffff;background:#0f5ebd;border-radius:1px;padding: 1px 5px 0 5px">BETA</span>
</div>
<div id="big" class="animated fadeInDown wait1">
    The most requested feature is finally here. Save your classes and access them from any device.
</div>
<div id="text" class="animated fadeIn wait15">
    Belltimes ID setup will take ~5 minutes. Please have your timetable ready.<br><br>
    <form id="form" style="margin: 0 auto; width:220px">
        <table>
            <tr>
                <td align="right"><label for="idInput">SBHS ID</label></td>
                <!--<td align="left"><input type='number' id="idInput" min="0" max="999999999" maxlength="9" size="10" onkeypress='validate(event)'/></td>-->
                <td align="left"><input type='text' id="idInput" maxlength="9" size="10" onkeypress='validate(event)'/></td>
            </tr>
            <tr>
                <td align="right"><label for "gradeInput">Grade</label></td>
                <td align="left"><select id="gradeInput" style="width:95px">
                        <option selected disabled hidden value=""></option>
                        <option value=7>Year 7</option>
                        <option value=8>Year 8</option>
                        <option value=9>Year 9</option>
                        <option value=10>Year 10</option>
                        <option value=11>Year 11</option>
                        <option value=12>Year 12</option>
                    </select>
                </td>
            </tr>
        </table>
    </form>
</div>
<div class="button" style="padding-top:20px">
    <button id="btnToMonday" onclick="toMonday()" class="blue animated fadeIn wait2"><span class="label">Continue</span></button>
</div><br><br><br>
<div class="fb-like animated fadeIn wait3" data-href="http://www.sbhsbelltimes.tk" data-send="true" data-width="300" data-show-faces="true" data-font="arial" data-colorscheme="dark" style="text-align: center"></div>
<script>
    var idInput;
    function toMonday(){
        idInput = $('#idInput').val();
        var gradeInput = $('#gradeInput').val();
        if (idInput.length!=9||isNaN(idInput)==true){alert("Please enter a valid SBHS ID with 9 digits.");return;}
        if (gradeInput==null||gradeInput==""||gradeInput=="-I will be Yr12 in-"){alert("Please enter your current school grade.");return;}
        nowYear = new Date().getFullYear();
        var yr12 = nowYear + (12-gradeInput);
        $.ajax({
            url:'/id/insert.php',
            type:'post',
            data:{'id':idInput,'yr12':yr12},
            success:function(response){
                if (response['exists']==false){
                    //new id
                    console.log('NOT EXISTO')
                }
                else{
                    //existing id
                    console.log('EXISTO');
                    $('#d1p1').val(response.d1p1);
                    $('#d1p2').val(response.d1p2);
                    $('#d1p3').val(response.d1p3);
                    $('#d1p4').val(response.d1p4);
                    $('#d1p5').val(response.d1p5);
                    $('#d1p6').val(response.d1p6);
                    $('#d1p1_r').val(response.d1p1_r);
                    $('#d1p2_r').val(response.d1p2_r);
                    $('#d1p3_r').val(response.d1p3_r);
                    $('#d1p4_r').val(response.d1p4_r);
                    $('#d1p5_r').val(response.d1p5_r);
                    $('#d1p6_r').val(response.d1p6_r);
                    $('#d2p1').val(response.d2p1);
                    $('#d2p2').val(response.d2p2);
                    $('#d2p3').val(response.d2p3);
                    $('#d2p4').val(response.d2p4);
                    $('#d2p5').val(response.d2p5);
                    $('#d2p6').val(response.d2p6);
                    $('#d2p1_r').val(response.d2p1_r);
                    $('#d2p2_r').val(response.d2p2_r);
                    $('#d2p3_r').val(response.d2p3_r);
                    $('#d2p4_r').val(response.d2p4_r);
                    $('#d2p5_r').val(response.d2p5_r);
                    $('#d2p6_r').val(response.d2p6_r);
                    $('#d3p1').val(response.d3p1);
                    $('#d3p2').val(response.d3p2);
                    $('#d3p3').val(response.d3p3);
                    $('#d3p4').val(response.d3p4);
                    $('#d3p5').val(response.d3p5);
                    $('#d3p6').val(response.d3p6);
                    $('#d3p1_r').val(response.d3p1_r);
                    $('#d3p2_r').val(response.d3p2_r);
                    $('#d3p3_r').val(response.d3p3_r);
                    $('#d3p4_r').val(response.d3p4_r);
                    $('#d3p5_r').val(response.d3p5_r);
                    $('#d3p6_r').val(response.d3p6_r);
                    $('#d4p1').val(response.d4p1);
                    $('#d4p2').val(response.d4p2);
                    $('#d4p3').val(response.d4p3);
                    $('#d4p4').val(response.d4p4);
                    $('#d4p5').val(response.d4p5);
                    $('#d4p6').val(response.d4p6);
                    $('#d4p1_r').val(response.d4p1_r);
                    $('#d4p2_r').val(response.d4p2_r);
                    $('#d4p3_r').val(response.d4p3_r);
                    $('#d4p4_r').val(response.d4p4_r);
                    $('#d4p5_r').val(response.d4p5_r);
                    $('#d4p6_r').val(response.d4p6_r);
                    $('#d5p1').val(response.d5p1);
                    $('#d5p2').val(response.d5p2);
                    $('#d5p3').val(response.d5p3);
                    $('#d5p4').val(response.d5p4);
                    $('#d5p5').val(response.d5p5);
                    $('#d5p6').val(response.d5p6);
                    $('#d5p1_r').val(response.d5p1_r);
                    $('#d5p2_r').val(response.d5p2_r);
                    $('#d5p3_r').val(response.d5p3_r);
                    $('#d5p4_r').val(response.d5p4_r);
                    $('#d5p5_r').val(response.d5p5_r);
                    $('#d5p6_r').val(response.d5p6_r);

                }
                console.log(response);
            },
            error:function(response){
                alert("An error occurred while connecting to Belltimes. Send me a bug report!");
            }
        });
        scrollToAnchor('intro');
        disableBtn('btnToMonday');
    }
</script>
<!---- //INTRO ----->
<div id="introDiv" style="display:none">
    <hr style="margin-bottom: 20px">
    <a name="intro"/>
    <div id="text" class="animated fadeInDown" style="margin-top:15px;margin-bottom:15px">
        You are ready to enter your classes.<br>Your progress will be saved with each section.<br><br>
        Return here at any time by tapping the <img src="/assets/id_black.png" height="27"> icon and enter your ID to review or edit your timetable.
    </div>
    <div class="button" style="padding-top:10px; padding-bottom:20px;">
        <button id="btnGotIt" onclick="scrollToAnchor('monday'); disableBtn('btnGotIt');" class="blue animated fadeIn waitbig">Got it!</button>
    </div>
</div>
<!---- //MONDAY ----->
<div id="mondayDiv" style="display:none">
    <hr style="margin-bottom: 20px">
    <a name="monday"/>
    <div id="big" class="animated fadeInDown" style="padding-top:30px;padding-bottom:20px;">Monday</div>
    <form id="text" class="" style="margin: 0 auto; width:300px; margin-top:0px; padding-top:0px;text-align: center">
        <table>
            <tr class="animated flipInX waitBig">
                <td align="right">Period 1&nbsp;</td>
                <td align="left"><input type='text' id="d1p1" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d1p1_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX waitBig">
                <td align="right">Period 2&nbsp;</td>
                <td align="left"><input type='text' id="d1p2" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d1p2_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait1">
                <td align="right">Period 3&nbsp;</td>
                <td align="left"><input type='text' id="d1p3" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d1p3_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait1">
                <td align="right">Period 4&nbsp;</td>
                <td align="left"><input type='text' id="d1p4" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d1p4_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait15">
                <td align="right">Period 5&nbsp;</td>
                <td align="left"><input type='text' id="d1p5" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d1p5_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait15">
                <td align="right">Period 6&nbsp;</td>
                <td align="left"><input type='text' id="d1p6" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d1p6_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
        </table>
    </form>
    <div class="button" style="padding-top:30px; padding-bottom:20px;">
        <button id="btnToTuesday" onclick="toTuesday()" class="blue animated fadeIn wait2"><span id="btnToTuesdayText" class="label">Save</span></button>
    </div>

    <script>
        function toTuesday(){
            console.log('id='+idInput);
            /*automate fill array from inputs, outputs d1p[1]*/
            var d1p=[];
            var d1pRoom=[];
            var d=1; //recursive for day toTuesday
            var ElemName;
            var ElemNameR;
            //begin automate
            for (var p=1; p<=6; p++){
                ElemName="#d"+d+"p"+p;
                ElemNameR="#d"+d+"p"+p+"_r";
                /*blank validation*/
                var e = $(ElemName).val();
                var er = $(ElemNameR).val();
                //UNCOMMENT this for validation
                if (e==null||e==""||er==null||er==""){alert('Please fill in any remaining blank inputs. For free periods, give it the class "Free" @ "/".');return;}
                else{
                    d1p[p]=e; d1pRoom[p]=er;
                }
            }
            console.log(d1p);
            /*validation OK, submit*/
            $.ajax({
                url:'/id/update1.php', //change this for monday
                //dataType:"json",//,fails with this line
                type:'POST',
                data:{'id':idInput,
                    'd1p1':d1p[1],
                    'd1p2':d1p[2],
                    'd1p3':d1p[3],
                    'd1p4':d1p[4],
                    'd1p5':d1p[5],
                    'd1p6':d1p[6],
                    'd1p1_r':d1pRoom[1],
                    'd1p2_r':d1pRoom[2],
                    'd1p3_r':d1pRoom[3],
                    'd1p4_r':d1pRoom[4],
                    'd1p5_r':d1pRoom[5],
                    'd1p6_r':d1pRoom[6]
                },
                success:function(response){
                    console.log("save "+response);
                    if (response=="success"){
                        $('#btnToTuesdayText').html("Saved"); //yer use .html
                        setTimeout(scrollToAnchor('tuesday'),2700);
                    }
                    else{
                        $('#btnToTuesdayText').html("Error");
                        alert('An error occurred while saving. Send me a bug report!')
                    }
                },
                error:function(response){
                    alert("An error occurred while connecting to Belltimes. Send me a bug report!");
                    console.log(response.toString());
                }
            });
        }
    </script>
</div>
<!---- //TUESDAY ----->
<div id="tuesdayDiv" style="display:none">
    <hr style="margin-bottom: 20px">
    <a name="tuesday"/>
    <div id="big" class="animated fadeInDown" style="padding-top:30px;padding-bottom:20px;">Tuesday</div>
    <form id="text" class="" style="margin: 0 auto; width:300px; margin-top:0px; padding-top:0px;text-align: center">
        <table>
            <tr class="animated flipInX waitBig">
                <td align="right">Period 1&nbsp;</td>
                <td align="left"><input type='text' id="d2p1" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d2p1_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX waitBig">
                <td align="right">Period 2&nbsp;</td>
                <td align="left"><input type='text' id="d2p2" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d2p2_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait1">
                <td align="right">Period 3&nbsp;</td>
                <td align="left"><input type='text' id="d2p3" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d2p3_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait1">
                <td align="right">Period 4&nbsp;</td>
                <td align="left"><input type='text' id="d2p4" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d2p4_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait15">
                <td align="right">Period 5&nbsp;</td>
                <td align="left"><input type='text' id="d2p5" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d2p5_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait15">
                <td align="right">Period 6&nbsp;</td>
                <td align="left"><input type='text' id="d2p6" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d2p6_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
        </table>
    </form>
    <div class="button" style="padding-top:30px; padding-bottom:20px;">
        <button id="btnToWednesday" onclick="toWednesday()" class="blue animated fadeIn wait2"><span id="btnToWednesdayText" class="label">Save</span></button>
    </div>

    <script>
        function toWednesday(){
            console.log('id='+idInput);
            /*automate fill array from inputs, outputs d2p[1]*/
            var d2p=[];
            var d2pRoom=[];
            var d=2; //recursive for day
            var ElemName;
            var ElemNameR;
            //begin automate
            for (var p=1; p<=6; p++){
                ElemName="#d"+d+"p"+p;
                ElemNameR="#d"+d+"p"+p+"_r";
                /*blank validation*/
                var e = $(ElemName).val();
                var er = $(ElemNameR).val();
                //UNCOMMENT this for validation
                if (e==null||e==""||er==null||er==""){alert('Please fill in any remaining blank inputs. For free periods, give it the class "Free" @ "/".');return;}
                else{
                    d2p[p]=e; d2pRoom[p]=er;
                }
            }
            console.log(d2p);
            /*validation OK, submit*/
            $.ajax({
                url:'/id/update2.php',
                //dataType:"json",//,fails with this line
                type:'POST',
                data:{'id':idInput,
                    'd2p1':d2p[1],
                    'd2p2':d2p[2],
                    'd2p3':d2p[3],
                    'd2p4':d2p[4],
                    'd2p5':d2p[5],
                    'd2p6':d2p[6],
                    'd2p1_r':d2pRoom[1],
                    'd2p2_r':d2pRoom[2],
                    'd2p3_r':d2pRoom[3],
                    'd2p4_r':d2pRoom[4],
                    'd2p5_r':d2pRoom[5],
                    'd2p6_r':d2pRoom[6]
                },
                success:function(response){
                    console.log("save "+response);
                    if (response=="success"){
                        $('#btnToWednesdayText').html("Saved"); //yer use .html
                        setTimeout(scrollToAnchor('wednesday'),2700);
                    }
                    else{
                        $('#btnToWednesdayText').html("Error");
                        alert('An error occurred while saving. Send me a bug report!')
                    }
                },
                error:function(response){
                    alert("An error occurred while connecting to Belltimes. Send me a bug report!");
                    console.log(response.toString());
                }
            });
        }
    </script>
</div>
<!---- //WEDNESDAY ----->
<div id="wednesdayDiv" style="display:none">
    <hr style="margin-bottom: 20px">
    <a name="wednesday"/>
    <div id="big" class="animated fadeInDown" style="padding-top:30px;padding-bottom:20px;">Wednesday</div>
    <form id="text" class="" style="margin: 0 auto; width:300px; margin-top:0px; padding-top:0px;text-align: center">
        <table>
            <tr class="animated flipInX waitBig">
                <td align="right">Period 1&nbsp;</td>
                <td align="left"><input type='text' id="d3p1" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d3p1_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX waitBig">
                <td align="right">Period 2&nbsp;</td>
                <td align="left"><input type='text' id="d3p2" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d3p2_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait1">
                <td align="right">Period 3&nbsp;</td>
                <td align="left"><input type='text' id="d3p3" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d3p3_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait1">
                <td align="right">Period 4&nbsp;</td>
                <td align="left"><input type='text' id="d3p4" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d3p4_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait15">
                <td align="right">Period 5&nbsp;</td>
                <td align="left"><input type='text' id="d3p5" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d3p5_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait15">
                <td align="right">Period 6&nbsp;</td>
                <td align="left"><input type='text' id="d3p6" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d3p6_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
        </table>
    </form>
    <div class="button" style="padding-top:30px; padding-bottom:20px;">
        <button id="btnToThursday" onclick="toThursday()" class="blue animated fadeIn wait2"><span id="btnToThursdayText" class="label">Save</span></button>
    </div>

    <script>
        function toThursday(){
            console.log('id='+idInput);
            /*automate fill array from inputs, outputs d3p[1]*/
            var d3p=[];
            var d3pRoom=[];
            var d=3; //recursive for day
            var ElemName;
            var ElemNameR;
            //begin automate
            for (var p=1; p<=6; p++){
                ElemName="#d"+d+"p"+p;
                ElemNameR="#d"+d+"p"+p+"_r";
                /*blank validation*/
                var e = $(ElemName).val();
                var er = $(ElemNameR).val();
                //UNCOMMENT this for validation
                if (e==null||e==""||er==null||er==""){alert('Please fill in any remaining blank inputs. For free periods, give it the class "Free" @ "/".');return;}
                else{
                    d3p[p]=e; d3pRoom[p]=er;
                }
            }
            console.log(d3p);
            /*validation OK, submit*/
            $.ajax({
                url:'/id/update3.php', //change this for monday
                //dataType:"json",//,fails with this line
                type:'POST',
                data:{'id':idInput,
                    'd3p1':d3p[1],
                    'd3p2':d3p[2],
                    'd3p3':d3p[3],
                    'd3p4':d3p[4],
                    'd3p5':d3p[5],
                    'd3p6':d3p[6],
                    'd3p1_r':d3pRoom[1],
                    'd3p2_r':d3pRoom[2],
                    'd3p3_r':d3pRoom[3],
                    'd3p4_r':d3pRoom[4],
                    'd3p5_r':d3pRoom[5],
                    'd3p6_r':d3pRoom[6]
                },
                success:function(response){
                    console.log("save "+response);
                    if (response=="success"){
                        $('#btnToThursdayText').html("Saved"); //yer use .html
                        setTimeout(scrollToAnchor('thursday'),2700);
                    }
                    else{
                        $('#btnToThursdayText').html("Error");
                        alert('An error occurred while saving. Send me a bug report!')
                    }
                },
                error:function(response){
                    alert("An error occurred while connecting to Belltimes. Send me a bug report!");
                    console.log(response.toString());
                }
            });
        }
    </script>
</div>
<!---- //THURSDAY ----->
<div id="thursdayDiv" style="display:none">
    <hr style="margin-bottom: 20px">
    <a name="thursday"/>
    <div id="big" class="animated fadeInDown" style="padding-top:30px;padding-bottom:20px;">Thursday</div>
    <form id="text" class="" style="margin: 0 auto; width:300px; margin-top:0px; padding-top:0px;text-align: center">
        <table>
            <tr class="animated flipInX waitBig">
                <td align="right">Period 1&nbsp;</td>
                <td align="left"><input type='text' id="d4p1" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d4p1_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX waitBig">
                <td align="right">Period 2&nbsp;</td>
                <td align="left"><input type='text' id="d4p2" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d4p2_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait1">
                <td align="right">Period 3&nbsp;</td>
                <td align="left"><input type='text' id="d4p3" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d4p3_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait1">
                <td align="right">Period 4&nbsp;</td>
                <td align="left"><input type='text' id="d4p4" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d4p4_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait15">
                <td align="right">Period 5&nbsp;</td>
                <td align="left"><input type='text' id="d4p5" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d4p5_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait15">
                <td align="right">Period 6&nbsp;</td>
                <td align="left"><input type='text' id="d4p6" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d4p6_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
        </table>
    </form>
    <div class="button" style="padding-top:30px; padding-bottom:20px;">
        <button id="btnToFriday" onclick="toFriday()" class="blue animated fadeIn wait2"><span id="btnToFridayText" class="label">Save</span></button>
    </div>

    <script>
        function toFriday(){
            console.log('id='+idInput);
            /*automate fill array from inputs, outputs d4p[1]*/
            var d4p=[];
            var d4pRoom=[];
            var d=4; //recursive for day toFriday
            var ElemName;
            var ElemNameR;
            //begin automate
            for (var p=1; p<=6; p++){
                ElemName="#d"+d+"p"+p;
                ElemNameR="#d"+d+"p"+p+"_r";
                /*blank validation*/
                var e = $(ElemName).val();
                var er = $(ElemNameR).val();
                //UNCOMMENT this for validation
                if (e==null||e==""||er==null||er==""){alert('Please fill in any remaining blank inputs. For free periods, give it the class "Free" @ "/".');return;}
                else{
                    d4p[p]=e; d4pRoom[p]=er;
                }
            }
            console.log(d4p);
            /*validation OK, submit*/
            $.ajax({
                url:'/id/update4.php', //change this for monday
                //dataType:"json",//,fails with this line
                type:'POST',
                data:{'id':idInput,
                    'd4p1':d4p[1],
                    'd4p2':d4p[2],
                    'd4p3':d4p[3],
                    'd4p4':d4p[4],
                    'd4p5':d4p[5],
                    'd4p6':d4p[6],
                    'd4p1_r':d4pRoom[1],
                    'd4p2_r':d4pRoom[2],
                    'd4p3_r':d4pRoom[3],
                    'd4p4_r':d4pRoom[4],
                    'd4p5_r':d4pRoom[5],
                    'd4p6_r':d4pRoom[6]
                },
                success:function(response){
                    console.log("save "+response);
                    if (response=="success"){
                        $('#btnToFridayText').html("Saved"); //yer use .html
                        setTimeout(scrollToAnchor('friday'),2700);
                    }
                    else{
                        $('#btnToFridayText').html("Error");
                        alert('An error occurred while saving. Send me a bug report!')
                    }
                },
                error:function(response){
                    alert("An error occurred while connecting to Belltimes. Send me a bug report!");
                    console.log(response.toString());
                }
            });
        }
    </script>
</div>
<!---- //FRIDAY ----->
<div id="fridayDiv" style="display:none">
    <hr style="margin-bottom: 20px">
    <a name="friday"/>
    <div id="big" class="animated fadeInDown" style="padding-top:30px;padding-bottom:20px;">Friday</div>
    <form id="text" class="" style="margin: 0 auto; width:300px; margin-top:0px; padding-top:0px;text-align: center">
        <table>
            <tr class="animated flipInX waitBig">
                <td align="right">Period 1&nbsp;</td>
                <td align="left"><input type='text' id="d5p1" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d5p1_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX waitBig">
                <td align="right">Period 2&nbsp;</td>
                <td align="left"><input type='text' id="d5p2" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d5p2_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait1">
                <td align="right">Period 3&nbsp;</td>
                <td align="left"><input type='text' id="d5p3" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d5p3_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait1">
                <td align="right">Period 4&nbsp;</td>
                <td align="left"><input type='text' id="d5p4" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d5p4_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait15">
                <td align="right">Period 5&nbsp;</td>
                <td align="left"><input type='text' id="d5p5" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d5p5_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
            <tr class="animated flipInX wait15">
                <td align="right">Period 6&nbsp;</td>
                <td align="left"><input type='text' id="d5p6" placeholder="Class" maxlength="5" size="12"/> @ <input type='text' id="d5p6_r" placeholder="Room" size="4" maxlength="3"/></td>
            </tr>
        </table>
    </form>
    <div class="button" style="padding-top:30px; padding-bottom:20px;">
        <button id="btnToFinal" onclick="toFinal()" class="blue animated fadeIn wait2"><span id="btnToFinalText" class="label">Save</span></button>
    </div>

    <script>
        function toFinal(){
            console.log('id='+idInput);
            /*automate fill array from inputs, outputs d5p[1]*/
            var d5p=[];
            var d5pRoom=[];
            var d=5; //recursive for day toFinal
            var ElemName;
            var ElemNameR;
            //begin automate
            for (var p=1; p<=6; p++){
                ElemName="#d"+d+"p"+p;
                ElemNameR="#d"+d+"p"+p+"_r";
                /*blank validation*/
                var e = $(ElemName).val();
                var er = $(ElemNameR).val();
                //UNCOMMENT this for validation
                if (e==null||e==""||er==null||er==""){alert('Please fill in any remaining blank inputs. For free periods, give it the class "Free" @ "/".');return;}
                else{
                    d5p[p]=e; d5pRoom[p]=er;
                }
            }
            console.log(d5p);
            /*validation OK, submit*/
            $.ajax({
                url:'/id/update5.php', //change this for monday
                //dataType:"json",//,fails with this line
                type:'POST',
                data:{'id':idInput,
                    'd5p1':d5p[1],
                    'd5p2':d5p[2],
                    'd5p3':d5p[3],
                    'd5p4':d5p[4],
                    'd5p5':d5p[5],
                    'd5p6':d5p[6],
                    'd5p1_r':d5pRoom[1],
                    'd5p2_r':d5pRoom[2],
                    'd5p3_r':d5pRoom[3],
                    'd5p4_r':d5pRoom[4],
                    'd5p5_r':d5pRoom[5],
                    'd5p6_r':d5pRoom[6]
                },
                success:function(response){
                    console.log("save "+response);
                    if (response=="success"){
                        $('#btnToFinalText').html("Saved"); //yer use .html
                        setTimeout(scrollToAnchor('final'),2700);
                    }
                    else{
                        $('#btnToFinalText').html("Error");
                        alert('An error occurred while saving. Send me a bug report!')
                    }
                },
                error:function(response){
                    alert("An error occurred while connecting to Belltimes. Send me a bug report!");
                    console.log(response.toString());
                }
            });
            $('#snippetID').html(idInput); //id in url preview for final pane
        }
    </script>
</div>
<!---- //700 lines of code later, ya done brah ----->
<div id="finalDiv" style="display:none">
    <hr style="margin-bottom: 20px">
    <a name="final"/>
    <div id="big" class="animated tada">
        Your Belltimes ID is ready!
    </div>
    <div id="text" class="animated fadeIn wait15" style="margin-bottom: 10px">
        From now on, access your personalised timetable with this link:
    </div>
    <div id="snippetText" class="animated fadeIn pulse wait2">
        www.sbhsbelltimes.tk/<b>?id=<span id="snippetID"></span></b>
    </div>
    <div id="instructions" class="animated fadeIn wait3">
        <ol>
            <li>You can <b>edit your timetable</b> in the future by tapping the <img src="/assets/id_black.png" height="24"> icon again on the home page.</li>
            <li>If you see the <img src="/assets/id_ok.png" height="24"> icon, your personalised timetable is showing!</li>
            <li>Edit your 1-Click shortcut on the next page:
                <ul>
                    <li class="small"><span style="color:#adadad;"><i>PC - </i>edit your browser bookmark.</span></li>
                    <li class="small"><span style="color:#adadad;"><i>iPhone/iPad - </i>you will see a prompt to "Add to Homescreen". (Remember to delete the old app!)</span></li>
                    <li class="small"><span style="color:#adadad;"><i>Android - </i>Sit tight, the Android app is being updated.</span></li>
                </ul>
            </li>
            <li style="color:#ff4444;">Thanks for being a part of Belltimes ID beta testing. Pass on any feedback or bugs ASAP via the "Give Feedback" link.</li>
            <li>Lastly, pls suggest a better tagline via "Give Feedback" - (eg. "Introducing Belltimes ID - all your school classes saved to the cloud, available anywhere with 1 click"... or "Personalise your timetable and access them from any device with 1 tap"??), the winner gets ANYTHING he wants! How about all my 18/20 eng essays? ;)</li>
        </ol>
    </div>

    <div class="button" style="padding-top:10px; padding-bottom:55px;">
        <button class="blue animated fadeIn wait4" onclick="goUrl()">Awesome! Take me to my timetable!</button>
    </div>
    <script>
        function goUrl(){
            urlId = "http://sbhsbelltimes.tk/?id="+idInput;
            window.location=urlId;
        }
    </script>

    <div id="bottom" class="animated fadeInUpBig wait4"><a href="https://docs.google.com/forms/d/1J-FFPzJkBjCOY4U73xIIe_UwwMqMevmX6T9FZKLmQA0/viewform" target="_blank" style="color: #00aced">Give Feedback</a></div>
    <div id="copyright" class="animated fadeInUpBig wait4">&#169 Jerry Yip 2013</div>
</div>
</div>
</body>
</html>
