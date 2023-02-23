<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
    
    <title>Data</title>
</head>
<body style="margin:0";>
    
    <video id="bgvideo" autoplay muted loop>
        <source src="backv.mp4" type="video/mp4">
    </video>
    <section class="container">
        <style>
            body{
                font-family: 'Times New Roman', Times, serif;
            }
            #b1{
            height: 45px;
            width: 125px;
            }
            #showall img{
                height: 200px;
                width: 100px;
                margin-right: 5px;
            }
            #c1{
                max-width: fit-content;
                padding: 0px;
            }
            #row1,#row0{
                display: inline-block;
            }
            #net1,#net2,#net3,#net4{
                height: 15px;
            }
            #row0{
                max-width: fit-content;
                margin-left: 15px;
                text-align: center;
            }
            #trans{
                position: sticky;
                z-index: 3;
                background: white;
                max-width: fit-content;
                height: 300px;
                padding: 30px;
                border-radius: 12px;
                text-align: center;
                box-shadow: 5px 5px 40px white;
            }
            .p4{
                text-align: center;
                border-radius: 12px;
                max-width: 1150px;
                height: 460px;
                position: absolute;
                bottom: 10px;
                right: 0;
                left: 15px;
                z-index: 4;
            }
            #buy,#sell{
                margin-top: 40px;
                margin-left: 5px;
                margin-right: 5px;
            }
            #count{
                margin-top: 40px;
                text-align: center;
                border-radius: 12px;
            }
            #part1,#part2{
                margin-top: 20px;
                display: inline-block;
            }
            #part3,#part4{
                margin-top: 20px;
                display: inline-block;
            }
            #part1,#part3{
                margin-right: 15px;
                margin-left: 15px;
            }
            #card img{
                height: 220px;
            }
            #manage,#skip{
                border: none;
                font-family:  Verdana;
                font-size: large;
        bottom:380px;
            }
            .comment-section{
                height: 350px;
                max-width: 90%;
                overflow-y:scroll;
                margin-left: 15px;
            }
            #send:hover{
                transform: scale(1);
                box-shadow: none;
            }
        .base-timer {
            position: relative;
            width: 120px;
            height: 120px;
          }
          
          .base-timer__svg {
            transform: scaleX(-1);
          }
          
          .base-timer__circle {
            fill: none;
            stroke: none;
          }
          
          .base-timer__path-elapsed {
            stroke-width: 7px;
            stroke: grey;
          }
          
          .base-timer__path-remaining {
            stroke-width: 7px;
            stroke-linecap: round;
            transform: rotate(90deg);
            transform-origin: center;
            transition: 1s linear all;
            fill-rule: nonzero;
            stroke: currentColor;
          }
          
          .base-timer__path-remaining.green {
            color: rgb(65, 184, 131);
          }
          
          .base-timer__path-remaining.orange {
            color: orange;
          }
          
          .base-timer__path-remaining.red {
            color: red;
          }
          
          .base-timer__label {
            position: absolute;
            top: 0;
            width: 120px;
            height: 120px;
            color:white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
          }
      #can{
        bottom: 290px;
        padding: 20px;
                border: none;
                font-family:  Verdana;
                font-size: large;
      }
      #manage:hover,#skip:hover,#can:hover{
        box-shadow: none;
      }
      #cmbox{
        height: 460px;
      }
          @media (min-height:800px){
      .p4 {
        height: 550px;
      }
      .p4 img{
        margin-top: 30px;
      }
      #manage,#skip{
        bottom:470px;
      }
      #can{
        bottom: 380px;
      }
      #cmbox{
        height: 550px;
      }
      .comment-section{
        height: 440px;
      }
    }
        </style>

    <div id="showall" style="backdrop-filter: blur(40px);background-color: rgba(146, 146, 146, 0.082);display:none;z-index:6;width:100vw;height:100vh;position: absolute;top: 0;bottom: 0;left: 0;right: 0;margin: auto; "> 
    <button onclick="game()" style="background: none; color:white;font-size:xx-large;border:none;margin-top:50px;margin-left:50px;">X</button><br>
    <div id="part1" style="color:white;font-size: xx-large;"><p id="name1"></p><img id="p1c1" ><img id="p1c2" ><img id="p1c3" ><img id="p1c4" ><img id="p1c5" ><img id="p1c6" ><img id="p1c7" ></div>
    <div id="part2" style="color:white;font-size: xx-large;"><p id="name2"></p><img id="p2c1" ><img id="p2c2" ><img id="p2c3" ><img id="p2c4" ><img id="p2c5" ><img id="p2c6" ><img id="p2c7" ></div>
    <div id="part3" style="color:white;font-size: xx-large;"><p id="name3"></p><img id="p3c1" ><img id="p3c2" ><img id="p3c3" ><img id="p3c4" ><img id="p3c5" ><img id="p3c6" ><img id="p3c7" ></div>
    <div id="part4" style="color:white;font-size: xx-large;"><p id="name4"></p><img id="p4c1" ><img id="p4c2" ><img id="p4c3" ><img id="p4c4" ><img id="p4c5" ><img id="p4c6" ><img id="p4c7" ></div>
    </div>
    
    <div style="z-index:5;width:300px;height:35px;position: absolute;bottom: 10px;right: 0;margin: auto;margin-right:30px;border-radius:12px;margin-bottom:10px "> 
    <input id="playermsg" style="margin-left: 8px;width:210px;border-radius:8px;height:30px" placeholder="Type message here">    
</div>

<div style="z-index:5;width:70px;height:40px;position: absolute;bottom: 5px;right: 0;margin: auto;margin-right:30px;border-radius:12px;margin-bottom:10px "> 
<button id="send" style="background:skyblue;border:none;padding:10px;color:white;border-radius:6px" onclick="msg()">SEND</button>
</div>

    <div id="cmbox" style="background-color:white;z-index:4;width:300px;position: absolute;bottom: 4px;right: 0;margin: auto;margin-right:30px;border-radius:12px;margin-bottom:10px "> 
            <h1 style="text-align: center;">Comments Box</h1>
            <div class="comment-section" id="comsec">
        </div>
        </div>
        <div class="p1">
            <h1><span id="player1"><?php echo $_SESSION['name1'] ?></span></h1>
            <table id="table2" cellpadding="7px"cellspacing="7px">
                <tr>
                  <th>Reliance</th>
                  <th>SBI</th>
                  <th>TATA</th>
                  <th>ONGC</th>
                  <th>INFOSYS</th>
                  <th>Relaince IND LTD</th>
                  <th>NIFTY</th>
                </tr>
                <tr>
                    <td id="rel11"></td>
                    <td id="sbi1"></td>
                    <td id="tata1"></td>
                    <td id="ongc1"></td>
                    <td id="infosys1"></td>
                    <td id="rel21"></td>
                    <td id="nifty1"></td>
                </tr>
              </table>
              <div>
                <h1 >Net Worth : $ <span id="worth1"></span></h1>
                <h1>Net Profit : <span id="dol1">$</span> <span id="profit1"></span><img id="net1"></h1>
            </div>
        </div>
    
        <div class="p2">
            <h1><span id="player2"><?php echo $_SESSION['name2'] ?></span></h1>
            <table id="table2" cellpadding="7px"cellspacing="7px">
                <tr>
                  <th>Reliance</th>
                  <th>SBI</th>
                  <th>TATA</th>
                  <th>ONGC</th>
                  <th>INFOSYS</th>
                  <th>Relaince IND LTD</th>
                  <th>NIFTY</th>
                </tr>
                <tr>
                <td id="rel12"></td>
                    <td id="sbi2"></td>
                    <td id="tata2"></td>
                    <td id="ongc2"></td>
                    <td id="infosys2"></td>
                    <td id="rel22"></td>
                    <td id="nifty2"></td>
                </tr>
              </table>
              <div>
              <h1 >Net Worth : $ <span id="worth2"></span></h1>
                <h1>Net Profit : <span id="dol2">$</span> <span id="profit2"></span><img id="net2"></h1>
            </div>
        </div>
        
        <div class="p3">
            <h1><span id="player3"><?php echo $_SESSION['name3'] ?></span></h1>
            <table id="table2" cellpadding="7px"cellspacing="7px">
                <tr>
                  <th>Reliance</th>
                  <th>SBI</th>
                  <th>TATA</th>
                  <th>ONGC</th>
                  <th>INFOSYS</th>
                  <th>Relaince IND LTD</th>
                  <th>NIFTY</th>
                </tr>
                <tr>
                <td id="rel13"></td>
                    <td id="sbi3"></td>
                    <td id="tata3"></td>
                    <td id="ongc3"></td>
                    <td id="infosys3"></td>
                    <td id="rel23"></td>
                    <td id="nifty3"></td>
                    
                </tr>   
              </table>
              <div>
              <h1>Net Worth : $ <span id="worth3"></span></h1>
                <h1>Net Profit : <span id="dol3">$</span> <span id="profit3"></span><img id="net3"></h1>
            </div>
        </div>
    </section>
    <div id="sec">
        <div class="scroll">
        <p id="p1">Reliance A.D.A Group <span id="st1"></span><img id="price1"></p><p id="per1"></p>
        <p id="p1">State Bank of India <span id="st2"></span><img id="price2"></p><p id="per2"></p>
        <p id="p1">Tata Industries <span id="st3"></span><img id="price3"></p><p id="per3"></p>
        <p id="p1">Oil And Natural Gas Corporation <span id="st4"></span><img id="price4"></p><p id="per4"></p>
        <p id="p1">Infosys <span id="st5"></span><img id="price5"></p><p id="per5"></p>
        <p id="p1">Reliance Industries Limited <span id="st6"></span><img id="price6"></p><p id="per6"></p>
        <p id="p1">Nifty <span id="st7"></span><img id="price7"></p><p id="per7"></p>
    </div>
    </div>
    <div id="whole" style="backdrop-filter: blur(10px);background-color: rgba(146, 146, 146, 0.082);display:none;z-index:5;width:100vw;height:100vh;position: absolute;top: 0;bottom: 0;left: 0;right: 0;margin: auto; "> 
        <button onclick="shut()"  style="background: none; color:white;font-size:xx-large;border:none;margin-top:50px;margin-left:50px;">X</button>
        <div id="fail" style="display: none;position: absolute;top: 0;left: 0;right: 0;margin: auto; z-index:4;background:red;color:white;height:40px;font-size:xx-large;">    
            Transaction Failed!!
    </div>
        <div id="trans" style="display: none;position: absolute;top: 0;bottom: 0;left: 0;right: 0;margin: auto; z-index:3;">  
        <p style="text-align: center;margin-bottom:20px;font-size:x-large;">Choose Stock</p>
        <select id="id_select2_example" style="width: 200px; border-radius:50px">
        <option data-img_src="b1.png" value="rel1"></option>
        <option data-img_src="b2.png" value="sbi"></option>
        <option data-img_src="b3.png" value="tata"></option>
        <option data-img_src="b5.png" value="infosys"></option>
        <option data-img_src="b6.jpeg" value="rel2"></option>
        <option data-img_src="b4.jpeg" value="ongc"></option>
        <option data-img_src="b7.jpeg" value="nifty"></option>
        </select>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
        <script type="text/javascript">
            function custom_template(obj){
                    var data = $(obj.element).data();
                    var text = $(obj.element).text();
                    if(data && data['img_src']){
                        img_src = data['img_src'];
                        template = $("<div><img src=\"" + img_src + "\" style=\"width:100%;height:50px;\"/><p style=\"font-weight: 700;font-size:14pt;text-align:center;\">" + text + "</p></div>");
                        return template;
                    }
                }
            var options = {
                'templateSelection': custom_template,
                'templateResult': custom_template,
            }
            $('#id_select2_example').select2(options);
            $('.select2-container--default .select2-selection--single').css({'height': '60px'});

 
            </script>     
                <br>
                <input id="count" type="number" min="1" style="border: 2px solid black;color:black">
                <br>
                <button onclick="buy()" id="buy">BUY</button>
                <button onclick="sell()" id="sell">SELL</button>
        </div>
        </div>
    <div class="p4">
        <div >
            <h1 style="font-size: x-large;"><span id="player4"><?php echo $_SESSION['name4'] ?></span></h1>
            <h1 >Net Worth : $ <span id="worth4"></span></h1>
            <h1>Net Profit : <span id="dol4">$</span> <span id="dollar"></span> <span id="profit4"></span> <img id="net4"></h1>
        </div>
        <div id="row1" style="margin-top: 10px;margin-bottom:10px;">
                  <table id="table2" cellpadding="7px"cellspacing="7px">
                    <tr>
                      <th>Reliance</th>
                      <th>SBI</th>
                      <th>TATA</th>
                      <th>ONGC</th>
                      <th>INFOSYS</th>
                      <th>Relaince IND LTD</th>
                  <th>NIFTY</th>
                    </tr>
                    <tr>
                    <td id="rel14"></td>
                    <td id="sbi4"></td>
                    <td id="tata4"></td>
                    <td id="ongc4"></td>
                    <td id="infosys4"></td>
                    <td id="rel24"></td>
                    <td id="nifty4"></td>
                    </tr>
                  </table>
        </div>
        <br>
        <div id="c2">
            <div id="row2">
                <div id="card">
                    <img id="cd1">
                    <img id="cd2">
                    <img id="cd3">
                    <img id="cd4">
                    <img id="cd5">
                    <img id="cd6">
                    <img id="cd7">
                </div>
            </div>
        </div>
        <br>
    </div>

        <button id="manage" onclick="bring()" style="background-color:yellowgreen;z-index:4;position: absolute;left: 0;margin: auto;margin-left:50px;border-radius:12px;padding:15px;color:white">Manage Stock</button>
        <button id="skip" onclick="showskip(),change()" style="background-color:red;z-index:4;position: absolute;right: 0;margin: auto;margin-right:1190px;border-radius:12px;padding:15px;color:white">Skip Turn</button>
        <button id="can" onclick="showcandlestick()" style="background-color:skyblue;z-index:4;position: absolute;right: 0;margin: auto;margin-right:1290px;border-radius:12px;padding:15px;color:white;border:none">Candle Stick Chart</button>
        <div id="app" style="z-index:4;position: absolute;bottom: 0;right: 0;margin: auto;margin-right:400px;border-radius:12px;margin-bottom:340px ">
        </div>
    <div id="end" style="backdrop-filter: blur(60px);background-color: rgba(146, 146, 146, 0.082);display:none;z-index:5;width:100vw;height:100vh;position: absolute;top: 0;bottom: 0;left: 0;right: 0;margin: auto; "> 
    <div style="margin-left:150px;margin-top:100px;color:white;">        
            <h1 id="win4" style="font-size: 60px;color:greenyellow">Winner !!</h1>
            <br><br>
            <h1 id="win3" style="font-size: 30px;margin-left:300px">2.</h1>
            <h1 id="win2" style="font-size: 30px;margin-left:300px">3.</h1>
            <h1 id="win1" style="font-size: 30px;margin-left:300px">4.</h1>
    <a href="index.html"><button style="border-radius: 12px;border:none;padding:30px;margin-left:1000px;font-size:20px;background:Black;color:white">Return to Menu</button></a>

        </div>
</div>
<style>
    #chart1,#chart2,#chart3{
        display: inline-block;
    }
    #chart4,#chart5,#chart6{
        display: inline-block;
    }
</style>
<p id="return" onclick="chartclose()" style="color:white;font-size:large;z-index:11;position: absolute;right: 50px;bottom:0;margin: auto;display:none;bottom:100px;color:black;font-size:xx-large">RETURN</p>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="candle" style="backdrop-filter: blur(60px);background-color:rgba(255, 255, 255, 0.43);display:none;z-index:10;width:100vw;height:100vh;position: absolute;top: 0;bottom: 0;left: 0;right: 0;margin: auto;color:black "> 
<div id="chart1" style="text-align: center;background:white;max-width:fit-content;border-radius:15px;margin-left:40px;margin-top:10px">
<div id="chart_div1" style="width: 450px; height: 200px;border-radius:15px;"></div>
<p>Reliance Ada Group</p></div>

<div  id="chart2" style="text-align: center;background:white;max-width:fit-content;border-radius:15px;margin-left:40px;margin-top:10px">
<div id="chart_div2" style="width: 450px; height: 200px;border-radius:15px;"></div>
<p>Reliance Industries</p></div>

<div  id="chart3" style="text-align: center;background:white;max-width:fit-content;border-radius:15px;margin-left:40px;margin-top:10px">
<div id="chart_div3" style="width: 450px; height: 200px;border-radius:15px;"></div>
<p>State bank of India</p></div>

<div id="chart4" style="text-align: center;background:white;max-width:fit-content;border-radius:15px;margin-left:40px;margin-top:10px">
<div id="chart_div4" style="width: 450px; height: 200px;border-radius:15px;"></div>
<p>Tata</p></div>

<div  id="chart5" style="text-align: center;background:white;max-width:fit-content;border-radius:15px;margin-left:40px;margin-top:10px">
<div id="chart_div5" style="width: 450px; height: 200px;border-radius:15px;"></div>
<p>Ongc</p></div>

<div  id="chart6" style="text-align: center;background:white;max-width:fit-content;border-radius:15px;margin-left:40px;margin-top:10px">
<div id="chart_div6" style="width: 450px; height: 200px;border-radius:15px;"></div>
<p>Nifty</p></div>

<div  id="chart7" style="text-align: center;background:white;max-width:fit-content;border-radius:15px;margin-left:535px;margin-top:10px">
<div id="chart_div7" style="width: 450px; height: 200px;border-radius:15px;"></div>
<p>Infosys</p></div>
</div>

    <script type="text/javascript">
        
        const FULL_DASH_ARRAY = 283;
        const WARNING_THRESHOLD = 10;
        const ALERT_THRESHOLD = 5;

        const COLOR_CODES = {
        info: {
            color: "green"
        },
        warning: {
            color: "orange",
            threshold: WARNING_THRESHOLD
        },
        alert: {
            color: "red",
            threshold: ALERT_THRESHOLD
        }
        };

        const TIME_LIMIT = <?php echo $_SESSION['time'] ?>*60;
        let timePassed = 0;
        let timeLeft = TIME_LIMIT;
        let timerInterval = null;
        let remainingPathColor = COLOR_CODES.info.color;

        document.getElementById("app").innerHTML = `
        <div class="base-timer">
        <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <g class="base-timer__circle">
            <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
            <path
                id="base-timer-path-remaining"
                stroke-dasharray="283"
                class="base-timer__path-remaining ${remainingPathColor}"
                d="
                M 50, 50
                m -45, 0
                a 45,45 0 1,0 90,0
                a 45,45 0 1,0 -90,0
                "
            ></path>
            </g>
        </svg>
        <span id="base-timer-label" class="base-timer__label">${formatTime(
            timeLeft
        )}</span>
        </div>
        `;

        startTimer();

        function onTimesUp() {
        clearInterval(timerInterval);
        }

        function startTimer() {
        timerInterval = setInterval(() => {
            timePassed = timePassed += 1;
            timeLeft = TIME_LIMIT - timePassed;
            document.getElementById("base-timer-label").innerHTML = formatTime(
            timeLeft
            );
            setCircleDasharray();
            setRemainingPathColor(timeLeft);

            if (timeLeft === 0) {
            onTimesUp();
            }
        }, 1000);
        }

        function formatTime(time) {
        const minutes = Math.floor(time / 60);
        let seconds = time % 60;

        if (seconds < 10) {
            seconds = `0${seconds}`;
        }

        return `${minutes}:${seconds}`;
        }

        function setRemainingPathColor(timeLeft) {
        const { alert, warning, info } = COLOR_CODES;
        if (timeLeft <= alert.threshold) {
            document
            .getElementById("base-timer-path-remaining")
            .classList.remove(warning.color);
            document
            .getElementById("base-timer-path-remaining")
            .classList.add(alert.color);
        } else if (timeLeft <= warning.threshold) {
            document
            .getElementById("base-timer-path-remaining")
            .classList.remove(info.color);
            document
            .getElementById("base-timer-path-remaining")
            .classList.add(warning.color);
        }
        }

        function calculateTimeFraction() {
        const rawTimeFraction = timeLeft / TIME_LIMIT;
        return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
        }

        function setCircleDasharray() {
        const circleDasharray = `${(
            calculateTimeFraction() * FULL_DASH_ARRAY
        ).toFixed(0)} 283`;
        document
            .getElementById("base-timer-path-remaining")
            .setAttribute("stroke-dasharray", circleDasharray);
        }


        function msg(){
            const div = document.createElement("div");
            div.style.height = "6%";
            div.style.padding = "2%";
            div.style.margin = "2%";
            div.style.color = "black";
            const com = document.getElementById("playermsg");
        
            div.innerHTML = player.head.next.next.next.name+":"+com.value;
            document.getElementById('comsec').appendChild(div);
            com.value="";
        }
        function showskip(){
            const div = document.createElement("div");
            div.style.height = "6%";
            div.style.padding = "2%";
            div.style.margin = "2%";
            div.style.color = "black";
        
            div.innerHTML = player.head.next.next.next.name+" skipped his turn";
            document.getElementById('comsec').appendChild(div);
        }
        function bring(){
            document.getElementById('trans').style.display='block';
            document.getElementById('whole').style.display='block';
        }
        function shut(){
            document.getElementById('trans').style.display='none';
            document.getElementById('whole').style.display='none';
        }
        function erropen(){
            document.getElementById('fail').style.display='block';
            setTimeout(errclose, 3000)
        }
        function errclose(){
            document.getElementById('fail').style.display='none';
        }
        function chartclose(){
            document.getElementById('candle').style.display='none';
            document.getElementById('return').style.display='none';
        }
let card = [["-5rel1.jpeg","rel1",-5],["-10rel1.jpeg","rel1",-10],["10rel1.jpeg","rel1",10],["-15rel1.jpeg","rel1",-15],["15rel1.jpeg","rel1",15],["5rel1.jpeg","rel1",5],
["-25rel2.jpeg","rel2",-25],["-20rel2.jpeg","rel2",-20],["-15rel2.jpeg","rel2",-15],["-10rel2.jpeg","rel2",-10],["-5rel2.jpeg","rel2",-5],["5rel2.jpeg","rel2",5],["10rel2.jpeg","rel2",10],["15rel2.jpeg","rel2",15],["20rel2.jpeg","rel2",20],["25rel2.jpeg","rel2",25],
["-20sbi.jpeg","sbi",-20],["-15sbi.jpeg","sbi",-15],["-10sbi.jpeg","sbi",-10],["-5sbi.jpeg","sbi",-5],["5sbi.jpeg","sbi",5],["10sbi.jpeg","sbi",10],["15sbi.jpeg","sbi",15],["20sbi.jpeg","sbi",20],
["-5tata.jpeg","tata",-5],["-15tata.jpeg","tata",-15],["-10tata.jpeg","tata",-10],["10tata.jpeg","tata",10],["15tata.jpeg","tata",15],["5tata.jpeg","tata",5],
["-5ongc.jpeg","ongc",-5],["-15ongc.jpeg","ongc",-15],["-10ongc.jpeg","ongc",-10],["10ongc.jpeg","ongc",10],["5ongc.jpeg","ongc",5],["15ongc.jpeg","ongc",15],
["-20infosys.jpeg","infosys",-20],["-15infosys.jpeg","infosys",-15],["-10infosys.jpeg","infosys",-10],["-5infosys.jpeg","infosys",-5],["5infosys.jpeg","infosys",5],["10infosys.jpeg","infosys",10],["15infosys.jpeg","infosys",15],["20infosys.jpeg","infosys",20],
["-30nifty.jpeg","nifty",-30],["-25nifty.jpeg","nifty",-25],["-20nifty.jpeg","nifty",-20],["-15nifty.jpeg","nifty",-15],["-10nifty.jpeg","nifty",-10],["-5nifty.jpeg","nifty",-5],["5nifty.jpeg","nifty",5],["10nifty.jpeg","nifty",10],["15nifty.jpeg","nifty",15],["20nifty.jpeg","nifty",20]["25nifty.jpeg","nifty",25],["30nifty.jpeg","nifty",30]];
let deck = card;
var count = 0;
function shuffle(){
    for (var i = deck.length - 1; i >= 0; i--) {
        deck = deck.sort(() => Math.random() - 0.5)
    }
}
shuffle();
    const t1 = document.getElementById("player1");
    const t2 = document.getElementById("player2");
    const t3 = document.getElementById("player3");
    const t4 = document.getElementById("player4");
    class Node {
        constructor(name) {
        this.name = name;
        this.rel1 = 0;
        this.sbi = 0;
        this.tata =0;
        this.ongc = 0;
        this.infosys = 0;
        this.rel2 = 0;
        this.nifty = 0;
        this.profit = 0;
        this.worth = 100000;
        this.next = null;
        this.card1src = null;
        this.card2src = null;
        this.card3src = null;
        this.card4src = null;
        this.card5src = null;
        this.card6src = null;
        this.card7src = null;
        this.card1name = null;
        this.card2name = null;
        this.card3name = null;
        this.card4name = null;
        this.card5name = null;
        this.card6name = null;
        this.card7name = null;
        this.card1value = null;
        this.card2value = null;
        this.card3value = null;
        this.card4value = null;
        this.card5value = null;
        this.card6value = null;
        this.card7value = null;      
    }
    }
    class LinkedList {
    constructor() {
        this.head = null;
    }
    add(name) {
        var node = new Node(name);
        var current;
        if (this.head == null)
            this.head = node;
        else {
            current = this.head;

            while (current.next) {
                current = current.next;
            }
            current.next = node;
        }
    }
    
    cirqshift(){
        var ptr = this.head;
        var temp = this.head;
        this.head =this.head.next;
        while (ptr.next!=null) {
                ptr = ptr.next;
        }
        ptr.next = temp;
        ptr.next.next =null;
    }
    }
    var player = new LinkedList();

    function setname(){
        player.add(t1.textContent);
        player.add(t2.textContent);
        player.add(t3.textContent);
        player.add(t4.textContent);
    }
    
    setname();

    const rel1 = document.getElementById("rel1");
    const rel2 = document.getElementById("rel2");
    const ongc = document.getElementById("ongc");
    const sbi = document.getElementById("sbi");
    const tata = document.getElementById("tata");
    const nifty = document.getElementById("nifty");
    const infosys = document.getElementById("infosys");
    const worth1 = document.getElementById("worth1");
    const profit1 = document.getElementById("profit1");
    const worth2 = document.getElementById("worth2");
    const profit2 = document.getElementById("profit2");
    const worth3 = document.getElementById("worth3");
    const profit3 = document.getElementById("profit3");
    const worth4 = document.getElementById("worth4");
    const profit4 = document.getElementById("profit4");

    const cd1 = document.getElementById("cd1");
    const cd2 = document.getElementById("cd2");
    const cd3 = document.getElementById("cd3");
    const cd4 = document.getElementById("cd4");
    const cd5 = document.getElementById("cd5");
    const cd6 = document.getElementById("cd6");
    const cd7 = document.getElementById("cd7");

    const net1 = document.getElementById("net1");
    const net2 = document.getElementById("net2");
    const net3 = document.getElementById("net3");
    const net4 = document.getElementById("net4");

    const dol1 = document.getElementById("dol1");
    const dol2 = document.getElementById("dol2");
    const dol3 = document.getElementById("dol3");
    const dol4 = document.getElementById("dol4");

    function setdata(){
        var p1 = player.head;
        var p2 = player.head.next;
        var p3 = player.head.next.next;
        var p4 = player.head.next.next.next;
        t1.textContent = p1.name;
        t2.textContent = p2.name;
        t3.textContent = p3.name;
        t4.textContent = p4.name;

        cd1.src = p4.card1src;
        cd2.src = p4.card2src;
        cd3.src = p4.card3src;
        cd4.src = p4.card4src;
        cd5.src = p4.card5src;
        cd6.src = p4.card6src;
        cd7.src = p4.card7src;

        worth1.textContent = p1.worth;
        profit1.textContent = p1.profit;
        worth2.textContent = p2.worth;
        profit2.textContent = p2.profit;
        worth3.textContent = p3.worth;
        profit3.textContent = p3.profit;
        worth4.textContent = p4.worth;
        profit4.textContent = p4.profit;

        rel11.textContent = p1.rel1;
        rel12.textContent = p2.rel1;
        rel13.textContent = p3.rel1;
        rel14.textContent = p4.rel1;

        ongc1.textContent = p1.ongc;
        ongc2.textContent = p2.ongc;
        ongc3.textContent = p3.ongc;
        ongc4.textContent = p4.ongc;

        rel21.textContent = p1.rel2;
        rel22.textContent = p2.rel2;
        rel23.textContent = p3.rel2;
        rel24.textContent = p4.rel2;

        sbi1.textContent = p1.sbi;
        sbi2.textContent = p2.sbi;
        sbi3.textContent = p3.sbi;
        sbi4.textContent = p4.sbi;

        tata1.textContent = p1.tata;
        tata2.textContent = p2.tata;
        tata3.textContent = p3.tata;
        tata4.textContent = p4.tata;

        infosys1.textContent = p1.infosys;
        infosys2.textContent = p2.infosys;
        infosys3.textContent = p3.infosys;
        infosys4.textContent = p4.infosys;

        nifty1.textContent = p1.nifty;
        nifty2.textContent = p2.nifty;
        nifty3.textContent = p3.nifty;
        nifty4.textContent = p4.nifty;
        if(p1.profit>=0){
            net1.src = "up.png";
            profit1.style.color = "green";
            dol1.style.color = "green";
        }
        if(p2.profit>=0){
            net2.src = "up.png";
            profit2.style.color = "green";
            dol2.style.color = "green";

        }
        if(p3.profit>=0){
            net3.src = "up.png";
            profit3.style.color = "green";
            dol3.style.color = "green";

        }
        if(p4.profit>=0){
            net4.src = "up.png";
            profit4.style.color = "green";
            dol4.style.color = "green";

        }
        if(p1.profit<0){
            net1.src = "down.png";
            profit1.style.color = "red";
            dol1.style.color = "red";
        }
        if(p2.profit<0){
            net2.src = "down.png";
            profit2.style.color = "red";
            dol2.style.color = "red";
        }
        if(p3.profit<0){
            net3.src = "down.png";
            profit3.style.color = "red";
            dol3.style.color = "red";
        }
        if(p4.profit<0){
            net4.src = "down.png";
            profit4.style.color = "red";
            dol4.style.color = "red";
        }
    }
    
    setdata();
    
    function change(){
        player.cirqshift();
        setdata();
        count+=1;

        if(count==12){
        showcard();
        count=0;
    }
    }

function give_card(){
    var p1 = player.head;
    var p2 = player.head.next;
    var p3 = player.head.next.next;
    var p4 = player.head.next.next.next;

    p1.card1src = deck[0][0];
    p1.card1name = deck[0][1];
    p1.card1value = deck[0][2];
    p1.card2src = deck[1][0];
    p1.card2name = deck[1][1];
    p1.card2value = deck[1][2];
    p1.card3src = deck[2][0];
    p1.card3name = deck[2][1];
    p1.card3value = deck[2][2];
    p1.card4src = deck[3][0];
    p1.card4name = deck[3][1];
    p1.card4value = deck[3][2];
    p1.card5src = deck[4][0];
    p1.card5name = deck[4][1];
    p1.card5value = deck[4][2];
    p1.card6src = deck[5][0];
    p1.card6name = deck[5][1];
    p1.card6value = deck[5][2];
    p1.card7src = deck[6][0];
    p1.card7name = deck[6][1];
    p1.card7value = deck[6][2];

    p2.card1src = deck[7][0];
    p2.card1name = deck[7][1];
    p2.card1value = deck[7][2];
    p2.card2src = deck[8][0];
    p2.card2name = deck[8][1];
    p2.card2value = deck[8][2];
    p2.card3src = deck[9][0];
    p2.card3name = deck[9][1];
    p2.card3value = deck[9][2];
    p2.card4src = deck[10][0];
    p2.card4name = deck[10][1];
    p2.card4value = deck[10][2];
    p2.card5src = deck[11][0];
    p2.card5name = deck[11][1];
    p2.card5value = deck[11][2];
    p2.card6src = deck[12][0];
    p2.card6name = deck[12][1];
    p2.card6value = deck[12][2];
    p2.card7src = deck[13][0];
    p2.card7name = deck[13][1];
    p2.card7value = deck[13][2];

    p3.card1src = deck[14][0];
    p3.card1name = deck[14][1];
    p3.card1value = deck[14][2];
    p3.card2src = deck[15][0];
    p3.card2name = deck[15][1];
    p3.card2value = deck[15][2];
    p3.card3src = deck[16][0];
    p3.card3name = deck[16][1];
    p3.card3value = deck[16][2];
    p3.card4src = deck[17][0];
    p3.card4name = deck[17][1];
    p3.card4value = deck[17][2];
    p3.card5src = deck[18][0];
    p3.card5name = deck[18][1];
    p3.card5value = deck[18][2];
    p3.card6src = deck[19][0];
    p3.card6name = deck[19][1];
    p3.card6value = deck[19][2];
    p3.card7src = deck[20][0];
    p3.card7name = deck[20][1];
    p3.card7value = deck[20][2];

    p4.card1src = deck[21][0];
    p4.card1name = deck[21][1];
    p4.card1value = deck[21][2];
    p4.card2src = deck[22][0];
    p4.card2name = deck[22][1];
    p4.card2value = deck[22][2];
    p4.card3src = deck[23][0];
    p4.card3name = deck[23][1];
    p4.card3value = deck[23][2];
    p4.card4src = deck[24][0];
    p4.card4name = deck[24][1];
    p4.card4value = deck[24][2];
    p4.card5src = deck[25][0];
    p4.card5name = deck[25][1];
    p4.card5value = deck[25][2];
    p4.card6src = deck[26][0];
    p4.card6name = deck[26][1];
    p4.card6value = deck[26][2];
    p4.card7src = deck[27][0];
    p4.card7name = deck[27][1];
    p4.card7value = deck[27][2];
}
    give_card();
    setdata();

    class stockNode {
        constructor(name,val) {
            this.val = val;
            this.name = name;
            this.next=null;
        }
    }
    class stockList {
        constructor() {
            this.head = null;
        }
        add(name,data) {
            var node = new stockNode(name,data);
            var current;
            if (this.head == null)
                this.head = node;
            else {
                current = this.head;

                while (current.next) {
                    current = current.next;
                }
                current.next = node;
            }
        }
    }

var stock = new stockList();
var oldstock = new stockList();

    function addstock(){
        stock.add("rel1",90);
        stock.add("sbi",95);
        stock.add("tata",60);
        stock.add("ongc",105);
        stock.add("infosys",120);
        stock.add("rel2",80);
        stock.add("nifty",150);

        oldstock.add("rel1",90);
        oldstock.add("sbi",95);
        oldstock.add("tata",60);
        oldstock.add("ongc",105);
        oldstock.add("infosys",120);
        oldstock.add("rel2",80);
        oldstock.add("nifty",150);
    }
    
    addstock();

    const st1 = document.getElementById("st1");
    const st2 = document.getElementById("st2");
    const st3 = document.getElementById("st3");
    const st4 = document.getElementById("st4");
    const st5 = document.getElementById("st5");
    const st6 = document.getElementById("st6");
    const st7 = document.getElementById("st7");

    const price1 = document.getElementById("price1");
    const price2 = document.getElementById("price2");
    const price3 = document.getElementById("price3");
    const price4 = document.getElementById("price4");
    const price5 = document.getElementById("price5");
    const price6 = document.getElementById("price6");
    const price7 = document.getElementById("price7");

    const per1 = document.getElementById("per1");
    const per2 = document.getElementById("per2");
    const per3 = document.getElementById("per3");
    const per4 = document.getElementById("per4");
    const per5 = document.getElementById("per5");
    const per6 = document.getElementById("per6");
    const per7 = document.getElementById("per7");

    function setstock(){
        var s1 = stock.head;
        var s2 = stock.head.next;
        var s3 = stock.head.next.next;
        var s4 = stock.head.next.next.next;
        var s5 = stock.head.next.next.next.next;
        var s6 = stock.head.next.next.next.next.next;
        var s7 = stock.head.next.next.next.next.next.next;

        var os1 = oldstock.head;
        var os2 = oldstock.head.next;
        var os3 = oldstock.head.next.next;
        var os4 = oldstock.head.next.next.next;
        var os5 = oldstock.head.next.next.next.next;
        var os6 = oldstock.head.next.next.next.next.next;
        var os7 = oldstock.head.next.next.next.next.next.next;

        st1.textContent=s1.val;
        st2.textContent=s2.val;
        st3.textContent=s3.val;
        st4.textContent=s4.val;
        st5.textContent=s5.val;
        st6.textContent=s6.val;
        st7.textContent=s7.val;

        per1.textContent=(((s1.val-os1.val)/(os1.val))*100).toFixed(2)+"%";
        per2.textContent=(((s2.val-os2.val)/(os2.val))*100).toFixed(2)+"%";
        per3.textContent=(((s3.val-os3.val)/(os3.val))*100).toFixed(2)+"%";
        per4.textContent=(((s4.val-os4.val)/(os4.val))*100).toFixed(2)+"%";
        per5.textContent=(((s5.val-os5.val)/(os5.val))*100).toFixed(2)+"%";
        per6.textContent=(((s6.val-os6.val)/(os6.val))*100).toFixed(2)+"%";
        per7.textContent=(((s7.val-os7.val)/(os7.val))*100).toFixed(2)+"%";
        
        if(((s1.val-os1.val)/(os1.val))*100>=0){
            per1.style.color="green";
            price1.src = "up.png";
        }
        if(((s2.val-os2.val)/(os2.val))*100>=0){
            per2.style.color="green";
            price2.src = "up.png";
        }
        if(((s3.val-os3.val)/(os3.val))*100>=0){
            per3.style.color="green";
            price3.src = "up.png";
        }
        if(((s4.val-os4.val)/(os4.val))*100>=0){
            per4.style.color="green";
            price4.src = "up.png";
        }
        if(((s5.val-os5.val)/(os5.val))*100>=0){
            per5.style.color="green";
            price5.src = "up.png";
        }
        if(((s6.val-os6.val)/(os6.val))*100>=0){
            per6.style.color="green";
            price6.src = "up.png";
        }
        if(((s7.val-os7.val)/(os7.val))*100>=0){
            per7.style.color="green";
            price7.src = "up.png";
        }

        if(((s1.val-os1.val)/(os1.val))*100<0){
            per1.style.color="red";
            price1.src = "down.png";
        }
        if(((s2.val-os2.val)/(os2.val))*100<0){
            per2.style.color="red";
            price2.src = "down.png";
        }
        if(((s3.val-os3.val)/(os3.val))*100<0){
            per3.style.color="red";
            price3.src = "down.png";
        }
        if(((s4.val-os4.val)/(os4.val))*100<0){
            per4.style.color="red";
            price4.src = "down.png";
        }
        if(((s5.val-os5.val)/(os5.val))*100<0){
            per5.style.color="red";
            price5.src = "down.png";
        }
        if(((s6.val-os6.val)/(os6.val))*100<0){
            per6.style.color="red";
            price6.src = "down.png";
        }
        if(((s7.val-os7.val)/(os7.val))*100<0){
            per7.style.color="red";
            price7.src = "down.png";
        }
    }

    setstock();
    function changestock(){
        var p1 = player.head;
        var p2 = player.head.next;
        var p3 = player.head.next.next;
        var p4 = player.head.next.next.next;
        var ptr = stock.head;
        
        while(ptr.name!=p1.card1name){
            ptr = ptr.next;
        }
        if(ptr.val+p1.card1value>=0){
        ptr.val+=p1.card1value;
        }
        else if(ptr.val+p1.card1value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p1.card2name){
            ptr = ptr.next;
        }
        if(ptr.val+p1.card2value>=0){
        ptr.val+=p1.card2value;
        }
        else if(ptr.val+p1.card2value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p1.card3name){
            ptr = ptr.next;
        }
        if(ptr.val+p1.card3value>=0){
        ptr.val+=p1.card3value;
        }
        else if(ptr.val+p1.card3value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p1.card4name){
            ptr = ptr.next;
        }
        if(ptr.val+p1.card4value>=0){
        ptr.val+=p1.card4value;
        }
        else if(ptr.val+p1.card4value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p1.card5name){
            ptr = ptr.next;
        }
        if(ptr.val+p1.card5value>=0){
        ptr.val+=p1.card5value;
        }
        else if(ptr.val+p1.card5value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p1.card6name){
            ptr = ptr.next;
        }
        if(ptr.val+p1.card6value>=0){
        ptr.val+=p1.card6value;
        }
        else if(ptr.val+p1.card6value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p1.card7name){
            ptr = ptr.next;
        }
        if(ptr.val+p1.card7value>=0){
        ptr.val+=p1.card7value;
        }
        else if(ptr.val+p1.card7value<0){
        ptr.val=0;
        }
        //card2

        ptr = stock.head;
        while(ptr.name!=p2.card1name){
            ptr = ptr.next;
        }
        if(ptr.val+p2.card1value>=0){
        ptr.val+=p2.card1value;
        }
        else if(ptr.val+p2.card1value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p2.card2name){
            ptr = ptr.next;
        }
        if(ptr.val+p2.card2value>=0){
        ptr.val+=p2.card2value;
        }
        else if(ptr.val+p2.card2value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p2.card3name){
            ptr = ptr.next;
        }
        if(ptr.val+p2.card3value>=0){
        ptr.val+=p2.card3value;
        }
        else if(ptr.val+p2.card3value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p2.card4name){
            ptr = ptr.next;
        }
        if(ptr.val+p2.card4value>=0){
        ptr.val+=p2.card4value;
        }
        else if(ptr.val+p2.card4value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p2.card5name){
            ptr = ptr.next;
        }
        if(ptr.val+p2.card5value>=0){
        ptr.val+=p2.card5value;
        }
        else if(ptr.val+p2.card5value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p2.card6name){
            ptr = ptr.next;
        }
        if(ptr.val+p2.card6value>=0){
        ptr.val+=p2.card6value;
        }
        else if(ptr.val+p2.card6value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p2.card7name){
            ptr = ptr.next;
        }
        if(ptr.val+p2.card7value>=0){
        ptr.val+=p2.card7value;
        }
        else if(ptr.val+p2.card7value<0){
        ptr.val=0;
        }
        //card3

        ptr = stock.head;
        while(ptr.name!=p3.card1name){
            ptr = ptr.next;
        }
        if(ptr.val+p3.card1value>=0){
        ptr.val+=p3.card1value;
        }
        else if(ptr.val+p3.card1value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p3.card2name){
            ptr = ptr.next;
        }
        if(ptr.val+p3.card2value>=0){
        ptr.val+=p3.card2value;
        }
        else if(ptr.val+p3.card2value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p3.card3name){
            ptr = ptr.next;
        }
        if(ptr.val+p3.card3value>=0){
        ptr.val+=p3.card3value;
        }
        else if(ptr.val+p3.card3value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p3.card4name){
            ptr = ptr.next;
        }
        if(ptr.val+p3.card4value>=0){
        ptr.val+=p3.card4value;
        }
        else if(ptr.val+p3.card4value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p3.card5name){
            ptr = ptr.next;
        }
        if(ptr.val+p3.card5value>=0){
        ptr.val+=p3.card5value;
        }
        else if(ptr.val+p3.card5value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p3.card6name){
            ptr = ptr.next;
        }
        if(ptr.val+p3.card6value>=0){
        ptr.val+=p3.card6value;
        }
        else if(ptr.val+p3.card6value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p3.card7name){
            ptr = ptr.next;
        }
        if(ptr.val+p3.card7value>=0){
        ptr.val+=p3.card7value;
        }
        else if(ptr.val+p3.card7value<0){
        ptr.val=0;
        }

        //card4

        ptr = stock.head;
        while(ptr.name!=p4.card1name){
            ptr = ptr.next;
        }
        if(ptr.val+p4.card1value>=0){
        ptr.val+=p4.card1value;
        }
        else if(ptr.val+p4.card1value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p4.card2name){
            ptr = ptr.next;
        }
        if(ptr.val+p4.card2value>=0){
        ptr.val+=p4.card2value;
        }
        else if(ptr.val+p4.card2value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p4.card3name){
            ptr = ptr.next;
        }
        if(ptr.val+p4.card3value>=0){
        ptr.val+=p4.card3value;
        }
        else if(ptr.val+p4.card3value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p4.card4name){
            ptr = ptr.next;
        }
        if(ptr.val+p4.card4value>=0){
        ptr.val+=p4.card4value;
        }
        else if(ptr.val+p4.card4value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p4.card5name){
            ptr = ptr.next;
        }
        if(ptr.val+p4.card5value>=0){
        ptr.val+=p4.card5value;
        }
        else if(ptr.val+p4.card5value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p4.card6name){
            ptr = ptr.next;
        }
        if(ptr.val+p4.card6value>=0){
        ptr.val+=p4.card6value;
        }
        else if(ptr.val+p4.card6value<0){
        ptr.val=0;
        }

        ptr = stock.head;
        while(ptr.name!=p4.card7name){
            ptr = ptr.next;
        }
        if(ptr.val+p4.card7value>=0){
        ptr.val+=p4.card7value;
        }
        else if(ptr.val+p4.card7value<0){
        ptr.val=0;
        }
        setstock();
    }
    function buy(){
        var s1 = stock.head;
        var s2 = stock.head.next;
        var s3 = stock.head.next.next;
        var s4 = stock.head.next.next.next;
        var s5 = stock.head.next.next.next.next;
        var s6 = stock.head.next.next.next.next.next;
        var s7 = stock.head.next.next.next.next.next.next;
        var flag=0;
        var p;
        const div = document.createElement("div");
            div.style.height = "6%";
            div.style.padding = "2%";
            div.style.margin = "2%";
            div.style.color = "black";

        if(document.getElementById("id_select2_example").value=="rel1"){
            if(parseInt(document.getElementById("count").value)*s1.val<=player.head.next.next.next.worth){
        player.head.next.next.next.rel1+=parseInt(document.getElementById("count").value);
        player.head.next.next.next.worth-=parseInt(document.getElementById("count").value)*s1.val;
        player.head.next.next.next.profit=player.head.next.next.next.worth-100000;
        flag=1;
        p=parseInt(document.getElementById("count").value)*s1.val;
        shut();
            }
        }
        if(document.getElementById("id_select2_example").value=="rel2"){
            if(parseInt(document.getElementById("count").value)*s6.val<=player.head.next.next.next.worth){
        player.head.next.next.next.rel2+=parseInt(document.getElementById("count").value);
        player.head.next.next.next.worth-=parseInt(document.getElementById("count").value)*s6.val;
        player.head.next.next.next.profit=player.head.next.next.next.worth-100000;
        flag=1;
        p=parseInt(document.getElementById("count").value)*s6.val;
        shut();
        }
        }
        if(document.getElementById("id_select2_example").value=="tata"){
            if(parseInt(document.getElementById("count").value)*s3.val<=player.head.next.next.next.worth){
        player.head.next.next.next.tata+=parseInt(document.getElementById("count").value);
        player.head.next.next.next.worth-=parseInt(document.getElementById("count").value)*s3.val;
        player.head.next.next.next.profit=player.head.next.next.next.worth-100000;
        flag=1;
        p=parseInt(document.getElementById("count").value)*s3.val;
        shut();
            }
        }
        if(document.getElementById("id_select2_example").value=="ongc"){
            if(parseInt(document.getElementById("count").value)*s4.val<=player.head.next.next.next.worth){
        player.head.next.next.next.ongc+=parseInt(document.getElementById("count").value);
        player.head.next.next.next.worth-=parseInt(document.getElementById("count").value)*s4.val;
        player.head.next.next.next.profit=player.head.next.next.next.worth-100000;
        flag=1;
        p=parseInt(document.getElementById("count").value)*s4.val;
        shut();
            }    
    }
        if(document.getElementById("id_select2_example").value=="infosys"){
            if(parseInt(document.getElementById("count").value)*s5.val<=player.head.next.next.next.worth){
        player.head.next.next.next.infosys+=parseInt(document.getElementById("count").value);
        player.head.next.next.next.worth-=parseInt(document.getElementById("count").value)*s5.val;
        player.head.next.next.next.profit=player.head.next.next.next.worth-100000;
        flag=1;
        p=parseInt(document.getElementById("count").value)*s5.val;
        shut();
        }   
    }
        if(document.getElementById("id_select2_example").value=="sbi"){
            if(parseInt(document.getElementById("count").value)*s2.val<=player.head.next.next.next.worth){
        player.head.next.next.next.sbi+=parseInt(document.getElementById("count").value);
        player.head.next.next.next.worth-=parseInt(document.getElementById("count").value)*s2.val;
        player.head.next.next.next.profit=player.head.next.next.next.worth-100000;
        flag=1;
        p=parseInt(document.getElementById("count").value)*s2.val;
        shut();
        }  
    }
        if(document.getElementById("id_select2_example").value=="nifty"){
            if(parseInt(document.getElementById("count").value)*s7.val<=player.head.next.next.next.worth){
        player.head.next.next.next.nifty+=parseInt(document.getElementById("count").value);
        player.head.next.next.next.worth-=parseInt(document.getElementById("count").value)*s7.val;
        player.head.next.next.next.profit=player.head.next.next.next.worth-100000;
        p=parseInt(document.getElementById("count").value)*s7.val;
        flag=1;
        shut();
        }  
    }
    if(flag==1){
        div.innerHTML = player.head.next.next.next.name+" bought "+document.getElementById("count").value+" stocks of "+document.getElementById("id_select2_example").value+" for $"+p;
            document.getElementById('comsec').appendChild(div);
        change();
    }
    if(flag==0){
        erropen();
        }
    }

    function sell(){
        var s1 = stock.head;
        var s2 = stock.head.next;
        var s3 = stock.head.next.next;
        var s4 = stock.head.next.next.next;
        var s5 = stock.head.next.next.next.next;
        var s6 = stock.head.next.next.next.next.next;
        var s7 = stock.head.next.next.next.next.next.next;
        var flag =0;
        var p;
        const div = document.createElement("div");
            div.style.height = "6%";
            div.style.padding = "2%";
            div.style.margin = "2%";
            div.style.color = "black";

        if(document.getElementById("id_select2_example").value=="rel1"){
            if(player.head.next.next.next.rel1-parseInt(document.getElementById("count").value)>=0){
                player.head.next.next.next.rel1-=parseInt(document.getElementById("count").value);
                player.head.next.next.next.worth+=parseInt(document.getElementById("count").value)*s1.val;
                player.head.next.next.next.profit=player.head.next.next.next.worth-100000;
                flag=1;
        p=parseInt(document.getElementById("count").value)*s1.val;
                shut();
            }
        }
        if(document.getElementById("id_select2_example").value=="rel2"){
            if(player.head.next.next.next.rel2-parseInt(document.getElementById("count").value)>=0){
                player.head.next.next.next.rel2-=parseInt(document.getElementById("count").value);
                player.head.next.next.next.worth+=parseInt(document.getElementById("count").value)*s6.val;
                player.head.next.next.next.profit=player.head.next.next.next.worth-100000;
                flag=1;
        p=parseInt(document.getElementById("count").value)*s6.val;
                shut();
            }
        }
        if(document.getElementById("id_select2_example").value=="tata"){
            if(player.head.next.next.next.tata-parseInt(document.getElementById("count").value)>=0){
        player.head.next.next.next.tata-=parseInt(document.getElementById("count").value);
        player.head.next.next.next.worth+=parseInt(document.getElementById("count").value)*s3.val;
                player.head.next.next.next.profit=player.head.next.next.next.worth-100000;
                flag=1;
        p=parseInt(document.getElementById("count").value)*s3.val;
                shut();
            }
        }
        if(document.getElementById("id_select2_example").value=="ongc"){
            if(player.head.next.next.next.ongc-parseInt(document.getElementById("count").value)>=0){
        player.head.next.next.next.ongc-=parseInt(document.getElementById("count").value);
        player.head.next.next.next.worth+=parseInt(document.getElementById("count").value)*s4.val;
                player.head.next.next.next.profit=player.head.next.next.next.worth-100000;
                flag=1;
        p=parseInt(document.getElementById("count").value)*s4.val;
                shut();
            }
        }
        if(document.getElementById("id_select2_example").value=="infosys"){
            if(player.head.next.next.next.infosys-parseInt(document.getElementById("count").value)>=0){
                player.head.next.next.next.infosys-=parseInt(document.getElementById("count").value);
                player.head.next.next.next.worth+=parseInt(document.getElementById("count").value)*s5.val;
                player.head.next.next.next.profit=player.head.next.next.next.worth-100000;
                flag=1;
        p=parseInt(document.getElementById("count").value)*s5.val;
                shut();
            }
        }
        if(document.getElementById("id_select2_example").value=="sbi"){
            if(player.head.next.next.next.sbi-parseInt(document.getElementById("count").value)>=0){
        player.head.next.next.next.sbi-=parseInt(document.getElementById("count").value);
        player.head.next.next.next.worth+=parseInt(document.getElementById("count").value)*s2.val;
                player.head.next.next.next.profit=player.head.next.next.next.worth-100000;
                flag=1;
        p=parseInt(document.getElementById("count").value)*s2.val;
                shut();
            }
        }
        if(document.getElementById("id_select2_example").value=="nifty"){
            if(player.head.next.next.next.nifty-parseInt(document.getElementById("count").value)>=0){
        player.head.next.next.next.nifty-=parseInt(document.getElementById("count").value);
        player.head.next.next.next.worth+=parseInt(document.getElementById("count").value)*s7.val;
                player.head.next.next.next.profit=player.head.next.next.next.worth-100000;
                flag=1;
        p=parseInt(document.getElementById("count").value)*s7.val;
        change();
            }
        }
        if(flag==1){
        div.innerHTML = player.head.next.next.next.name+" sold "+document.getElementById("count").value+" stocks of "+document.getElementById("id_select2_example").value+" for $"+p;
            document.getElementById('comsec').appendChild(div);
            shut();
        change();
    }
        if(flag==0){
        erropen();
        }
    }

    function showcard(){
        document.getElementById('showall').style.display='block';
        var p1 = player.head;
        var p2 = player.head.next;
        var p3 = player.head.next.next;
        var p4 = player.head.next.next.next;
        document.getElementById('name1').textContent = p1.name;
        document.getElementById('name2').textContent = p2.name;
        document.getElementById('name3').textContent = p3.name;
        document.getElementById('name4').textContent = p4.name;

        document.getElementById('p1c1').src = p1.card1src;
        document.getElementById('p1c2').src = p1.card2src;
        document.getElementById('p1c3').src = p1.card3src;
        document.getElementById('p1c4').src = p1.card4src;
        document.getElementById('p1c5').src = p1.card5src;
        document.getElementById('p1c6').src = p1.card6src;
        document.getElementById('p1c7').src = p1.card7src;

        document.getElementById('p2c1').src = p2.card1src;
        document.getElementById('p2c2').src = p2.card2src;
        document.getElementById('p2c3').src = p2.card3src;
        document.getElementById('p2c4').src = p2.card4src;
        document.getElementById('p2c5').src = p2.card5src;
        document.getElementById('p2c6').src = p2.card6src;
        document.getElementById('p2c7').src = p2.card7src;

        document.getElementById('p3c1').src = p3.card1src;
        document.getElementById('p3c2').src = p3.card2src;
        document.getElementById('p3c3').src = p3.card3src;
        document.getElementById('p3c4').src = p3.card4src;
        document.getElementById('p3c5').src = p3.card5src;
        document.getElementById('p3c6').src = p3.card6src;
        document.getElementById('p3c7').src = p3.card7src;

        document.getElementById('p4c1').src = p4.card1src;
        document.getElementById('p4c2').src = p4.card2src;
        document.getElementById('p4c3').src = p4.card3src;
        document.getElementById('p4c4').src = p4.card4src;
        document.getElementById('p4c5').src = p4.card5src;
        document.getElementById('p4c6').src = p4.card6src;
        document.getElementById('p4c7').src = p4.card7src;
    }

    endtime();
        function showres(){
            document.getElementById("end").style.display="block";

        var p1 = player.head;
        var p2 = player.head.next;
        var p3 = player.head.next.next;
        var p4 = player.head.next.next.next;

        var s1 = stock.head;
        var s2 = stock.head.next;
        var s3 = stock.head.next.next;
        var s4 = stock.head.next.next.next;
        var s5 = stock.head.next.next.next.next;
        var s6 = stock.head.next.next.next.next.next;
        var s7 = stock.head.next.next.next.next.next.next;
            
        p1.worth = p1.worth + p1.rel1*s1.val+ p1.sbi*s2.val+ p1.tata*s3.val+ p1.ongc*s4.val+ p1.infosys*s5.val+ p1.rel2*s6.val+ p1.nifty*s7.val;
        p2.worth = p2.worth + p2.rel1*s1.val+ p2.sbi*s2.val+ p2.tata*s3.val+ p2.ongc*s4.val+ p2.infosys*s5.val+ p2.rel2*s6.val+ p2.nifty*s7.val;
        p3.worth = p3.worth + p3.rel1*s1.val+ p3.sbi*s2.val+ p3.tata*s3.val+ p3.ongc*s4.val+ p3.infosys*s5.val+ p3.rel2*s6.val+ p3.nifty*s7.val;
        p4.worth = p4.worth + p4.rel1*s1.val+ p4.sbi*s2.val+ p4.tata*s3.val+ p4.ongc*s4.val+ p4.infosys*s5.val+ p4.rel2*s6.val+ p4.nifty*s7.val;
            
        var temp = [[p1.name,p1.worth],[p2.name,p2.worth],[p3.name,p3.worth],[p4.name,p4.worth]];
        temp.sort(function(a, b) {return a[1] - b[1];});
        document.getElementById("win4").textContent+=" "+temp[3][0]+" , Net Worth $"+temp[3][1];
        document.getElementById("win3").textContent+=" "+temp[2][0]+" , Net Worth $"+temp[2][1];
        document.getElementById("win2").textContent+=" "+temp[1][0]+" , Net Worth $"+temp[1][1];
        document.getElementById("win1").textContent+=" "+temp[0][0]+" , Net Worth $"+temp[0][1];
    }
        function endtime(){
            setTimeout(showres, <?php echo $_SESSION['time']?>*60*1000);
        }

        class candlenode {
        constructor(oldval,newval) {
            this.oldval = oldval;
            this.newval = newval;
            this.next=null;
        }
    }
    class candleList {
        constructor() {
            this.head = null;
        }
        add(data1,data2) {
            var node = new candlenode(data1,data2);
            var current;
            if (this.head == null)
                this.head = node;
            else {
                current = this.head;

                while (current.next) {
                    current = current.next;
                }
                current.next = node;
            }
        }
    }

    

var rel1price = new candleList();
var rel2price = new candleList();
var sbiprice = new candleList();
var infosysprice = new candleList();
var ongcprice = new candleList();
var tataprice = new candleList();
var niftyprice = new candleList();

    function candlestick(){
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart1);
    google.charts.setOnLoadCallback(drawChart2);
    google.charts.setOnLoadCallback(drawChart3);
    google.charts.setOnLoadCallback(drawChart4);
    google.charts.setOnLoadCallback(drawChart5);
    google.charts.setOnLoadCallback(drawChart6);
    google.charts.setOnLoadCallback(drawChart7);
    
    function drawChart1() {
        var oldchart = [];
        var newchart = [];
        r1 = rel1price.head
        var j=0
        while(j!=10){
            oldchart[j]=(0);
            newchart[j]=(0);
            j++;
        }
        var i =0;
        while(r1!=null){
            oldchart[i]= (r1.oldval);
            newchart[i++]= (r1.newval);
            r1 = r1.next;
        }
    var data = google.visualization.arrayToDataTable([
        
      [' ', oldchart[0], oldchart[0], newchart[0], newchart[0]],
      [' ', oldchart[1], oldchart[1], newchart[1], newchart[1]],
      [' ', oldchart[2], oldchart[2], newchart[2], newchart[2]],
      [' ', oldchart[3], oldchart[3], newchart[3], newchart[3]],
      [' ', oldchart[4], oldchart[4], newchart[4], newchart[4]],
      [' ', oldchart[5], oldchart[5], newchart[5], newchart[5]],
      [' ', oldchart[6], oldchart[6], newchart[6], newchart[6]],
      [' ', oldchart[7], oldchart[7], newchart[7], newchart[7]],
      [' ', oldchart[8], oldchart[8], newchart[8], newchart[8]],
      [' ', oldchart[9], oldchart[9], newchart[9], newchart[9]]
      // Treat first row as data as well.
    ], true);

    var options = {
          legend: 'none',
          bar: { groupWidth: '90%' },
          candlestick: {
            fallingColor: { strokeWidth: 0, fill: '#a52714' }, // red
            risingColor: { strokeWidth: 0, fill: '#0f9d58' }   // green
          },
          hAxis: {gridlines: 'null'}
        };

    var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div1'));
    chart.draw(data, options);
    }

    function drawChart2() {
        var oldchart = [];
        var newchart = [];
        r1 = rel2price.head
        var j=0
        while(j!=10){
            oldchart[j]=(0);
            newchart[j]=(0);
            j++;
        }
        var i =0;
        while(r1!=null){
            oldchart[i]= (r1.oldval);
            newchart[i++]= (r1.newval);
            r1 = r1.next;
        }
    var data = google.visualization.arrayToDataTable([
      [' ', oldchart[0], oldchart[0], newchart[0], newchart[0]],
      [' ', oldchart[1], oldchart[1], newchart[1], newchart[1]],
      [' ', oldchart[2], oldchart[2], newchart[2], newchart[2]],
      [' ', oldchart[3], oldchart[3], newchart[3], newchart[3]],
      [' ', oldchart[4], oldchart[4], newchart[4], newchart[4]],
      [' ', oldchart[5], oldchart[5], newchart[5], newchart[5]],
      [' ', oldchart[6], oldchart[6], newchart[6], newchart[6]],
      [' ', oldchart[7], oldchart[7], newchart[7], newchart[7]],
      [' ', oldchart[8], oldchart[8], newchart[8], newchart[8]],
      [' ', oldchart[9], oldchart[9], newchart[9], newchart[9]]
    ], true);

    var options = {
          legend: 'none',
          bar: { groupWidth: '90%' },
          candlestick: {
            fallingColor: { strokeWidth: 0, fill: '#a52714' }, // red
            risingColor: { strokeWidth: 0, fill: '#0f9d58' }   // green
          },
          hAxis: {gridlines: 'null'}
        };

    var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div2'));
    chart.draw(data, options);
    }

    function drawChart3() {
        var oldchart = [];
        var newchart = [];
        r1 = sbiprice.head
        var j=0
        while(j!=10){
            oldchart[j]=(0);
            newchart[j]=(0);
            j++;
        }
        var i =0;
        while(r1!=null){
            oldchart[i]= (r1.oldval);
            newchart[i++]= (r1.newval);
            r1 = r1.next;
        }
    var data = google.visualization.arrayToDataTable([
      [' ', oldchart[0], oldchart[0], newchart[0], newchart[0]],
      [' ', oldchart[1], oldchart[1], newchart[1], newchart[1]],
      [' ', oldchart[2], oldchart[2], newchart[2], newchart[2]],
      [' ', oldchart[3], oldchart[3], newchart[3], newchart[3]],
      [' ', oldchart[4], oldchart[4], newchart[4], newchart[4]],
      [' ', oldchart[5], oldchart[5], newchart[5], newchart[5]],
      [' ', oldchart[6], oldchart[6], newchart[6], newchart[6]],
      [' ', oldchart[7], oldchart[7], newchart[7], newchart[7]],
      [' ', oldchart[8], oldchart[8], newchart[8], newchart[8]],
      [' ', oldchart[9], oldchart[9], newchart[9], newchart[9]]
    ], true);

    var options = {
          legend: 'none',
          bar: { groupWidth: '90%' },
          candlestick: {
            fallingColor: { strokeWidth: 0, fill: '#a52714' }, // red
            risingColor: { strokeWidth: 0, fill: '#0f9d58' }   // green
          },
          hAxis: {gridlines: 'null'}
        };

    var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div3'));
    chart.draw(data, options);
    }

    function drawChart4() {
        var oldchart = [];
        var newchart = [];
        r1 = tataprice.head
        var j=0
        while(j!=10){
            oldchart[j]=(0);
            newchart[j]=(0);
            j++;
        }
        var i =0;
        while(r1!=null){
            oldchart[i]= (r1.oldval);
            newchart[i++]= (r1.newval);
            r1 = r1.next;
        }
    var data = google.visualization.arrayToDataTable([
      [' ', oldchart[0], oldchart[0], newchart[0], newchart[0]],
      [' ', oldchart[1], oldchart[1], newchart[1], newchart[1]],
      [' ', oldchart[2], oldchart[2], newchart[2], newchart[2]],
      [' ', oldchart[3], oldchart[3], newchart[3], newchart[3]],
      [' ', oldchart[4], oldchart[4], newchart[4], newchart[4]],
      [' ', oldchart[5], oldchart[5], newchart[5], newchart[5]],
      [' ', oldchart[6], oldchart[6], newchart[6], newchart[6]],
      [' ', oldchart[7], oldchart[7], newchart[7], newchart[7]],
      [' ', oldchart[8], oldchart[8], newchart[8], newchart[8]],
      [' ', oldchart[9], oldchart[9], newchart[9], newchart[9]]
    ], true);

    var options = {
          legend: 'none',
          bar: { groupWidth: '90%' },
          candlestick: {
            fallingColor: { strokeWidth: 0, fill: '#a52714' }, // red
            risingColor: { strokeWidth: 0, fill: '#0f9d58' }   // green
          },
          hAxis: {gridlines: 'null'}
        };

    var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div4'));
    chart.draw(data, options);
    }

    function drawChart5() {
        var oldchart = [];
        var newchart = [];
        r1 = ongcprice.head
        var j=0
        while(j!=10){
            oldchart[j]=(0);
            newchart[j]=(0);
            j++;
        }
        var i =0;
        while(r1!=null){
            oldchart[i]= (r1.oldval);
            newchart[i++]= (r1.newval);
            r1 = r1.next;
        }
    var data = google.visualization.arrayToDataTable([
      [' ', oldchart[0], oldchart[0], newchart[0], newchart[0]],
      [' ', oldchart[1], oldchart[1], newchart[1], newchart[1]],
      [' ', oldchart[2], oldchart[2], newchart[2], newchart[2]],
      [' ', oldchart[3], oldchart[3], newchart[3], newchart[3]],
      [' ', oldchart[4], oldchart[4], newchart[4], newchart[4]],
      [' ', oldchart[5], oldchart[5], newchart[5], newchart[5]],
      [' ', oldchart[6], oldchart[6], newchart[6], newchart[6]],
      [' ', oldchart[7], oldchart[7], newchart[7], newchart[7]],
      [' ', oldchart[8], oldchart[8], newchart[8], newchart[8]],
      [' ', oldchart[9], oldchart[9], newchart[9], newchart[9]]
    ], true);

    var options = {
          legend: 'none',
          bar: { groupWidth: '90%' },
          candlestick: {
            fallingColor: { strokeWidth: 0, fill: '#a52714' }, // red
            risingColor: { strokeWidth: 0, fill: '#0f9d58' }   // green
          },
          hAxis: {gridlines: 'null'}
        };

    var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div5'));
    chart.draw(data, options);
    }

    function drawChart6() {
        var oldchart = [];
        var newchart = [];
        r1 = niftyprice.head
        var j=0
        while(j!=10){
            oldchart[j]=(0);
            newchart[j]=(0);
            j++;
        }
        var i =0;
        while(r1!=null){
            oldchart[i]= (r1.oldval);
            newchart[i++]= (r1.newval);
            r1 = r1.next;
        }
    var data = google.visualization.arrayToDataTable([
      [' ', oldchart[0], oldchart[0], newchart[0], newchart[0]],
      [' ', oldchart[1], oldchart[1], newchart[1], newchart[1]],
      [' ', oldchart[2], oldchart[2], newchart[2], newchart[2]],
      [' ', oldchart[3], oldchart[3], newchart[3], newchart[3]],
      [' ', oldchart[4], oldchart[4], newchart[4], newchart[4]],
      [' ', oldchart[5], oldchart[5], newchart[5], newchart[5]],
      [' ', oldchart[6], oldchart[6], newchart[6], newchart[6]],
      [' ', oldchart[7], oldchart[7], newchart[7], newchart[7]],
      [' ', oldchart[8], oldchart[8], newchart[8], newchart[8]],
      [' ', oldchart[9], oldchart[9], newchart[9], newchart[9]]
    ], true);

    var options = {
          legend: 'none',
          bar: { groupWidth: '90%' },
          candlestick: {
            fallingColor: { strokeWidth: 0, fill: '#a52714' }, // red
            risingColor: { strokeWidth: 0, fill: '#0f9d58' }   // green
          },
          hAxis: {gridlines: 'null'}
        };

    var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div6'));
    chart.draw(data, options);
    }
    function drawChart7() {
        var oldchart = [];
        var newchart = [];
        r1 = infosysprice.head
        var j=0
        while(j!=10){
            oldchart[j]=(0);
            newchart[j]=(0);
            j++;
        }
        var i =0;
        while(r1!=null){
            oldchart[i]= (r1.oldval);
            newchart[i++]= (r1.newval);
            r1 = r1.next;
        }
    var data = google.visualization.arrayToDataTable([
      [' ', oldchart[0], oldchart[0], newchart[0], newchart[0]],
      [' ', oldchart[1], oldchart[1], newchart[1], newchart[1]],
      [' ', oldchart[2], oldchart[2], newchart[2], newchart[2]],
      [' ', oldchart[3], oldchart[3], newchart[3], newchart[3]],
      [' ', oldchart[4], oldchart[4], newchart[4], newchart[4]],
      [' ', oldchart[5], oldchart[5], newchart[5], newchart[5]],
      [' ', oldchart[6], oldchart[6], newchart[6], newchart[6]],
      [' ', oldchart[7], oldchart[7], newchart[7], newchart[7]],
      [' ', oldchart[8], oldchart[8], newchart[8], newchart[8]],
      [' ', oldchart[9], oldchart[9], newchart[9], newchart[9]]
    ], true);

    var options = {
          legend: 'none',
          bar: { groupWidth: '90%' },
          candlestick: {
            fallingColor: { strokeWidth: 0, fill: '#a52714' }, // red
            risingColor: { strokeWidth: 0, fill: '#0f9d58' }   // green
          },
          hAxis: {gridlines: 'null'}
        };

    var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div7'));
    chart.draw(data, options);
    }
    }

    function showcandlestick(){
        candlestick();
        document.getElementById('candle').style.display='block';
        document.getElementById('return').style.display='block';
    }

    function game(){
        document.getElementById('showall').style.display='none';
        var ptr1 = stock.head;
        var ptr2 = oldstock.head;

        while(ptr1!=null){
        ptr2.val = ptr1.val;
        ptr1=ptr1.next;
        ptr2=ptr2.next;
        }
    
    changestock();
    shuffle();
    give_card();
    setdata();
    var ns1 = stock.head;
        var ns2 = stock.head.next;
        var ns3 = stock.head.next.next;
        var ns4 = stock.head.next.next.next;
        var ns5 = stock.head.next.next.next.next;
        var ns6 = stock.head.next.next.next.next.next;
        var ns7 = stock.head.next.next.next.next.next.next;

        var os1 = oldstock.head;
        var os2 = oldstock.head.next;
        var os3 = oldstock.head.next.next;
        var os4 = oldstock.head.next.next.next;
        var os5 = oldstock.head.next.next.next.next;
        var os6 = oldstock.head.next.next.next.next.next;
        var os7 = oldstock.head.next.next.next.next.next.next;

        rel1price.add(os1.val,ns1.val);
        sbiprice.add(os2.val,ns2.val);
        tataprice.add(os3.val,ns3.val);
        ongcprice.add(os4.val,ns4.val);
        infosysprice.add(os5.val,ns5.val);
        rel2price.add(os6.val,ns6.val);
        niftyprice.add(os7.val,ns7.val);
    }
    </script>
</body>
</html>