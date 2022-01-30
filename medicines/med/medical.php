<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>Document</title>
  <style>
    body {
      background-image: url("/healthcare.jpg");
      width: 100%;
      height: auto;
      background-size: cover;
    }
  </style>
  <style>
    .h-full {
      background-image: url("/medical.png");
      background-size: cover;
    }
  </style>


</head>

<body>

  <section class="text-gray-600 body-font">

    <div class="container px-5 py-24 mx-auto">
<ul>
<li class="active"><a href="../index.php"><B>BACK</B></a></li>

</ul>
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Medical Shops</h1>
        <p> This page provides the contact list of genericmedical shops in your distrcit</p>
      </div>
      <div> 

        <input type="text" id="search-box" placeholder="Enter District">
        <button id="search-btn" onclick="searchpage()"> SEARCH
        </button>
        <script>
          let searchvariable = document.getElementById("search-box")
          
          function searchpage() {
            let text = searchvariable.value
            window.find(text)
          }
          
          </script>
      <style> 
      #search-box{
        width:80%;
        border:solid red;
        border-radius: 10px;
        margin: 20px;
        padding: 5px; 
        padding-left: 10px;
      }
      
      #search-btn{
        background-color: green;
        color: white;
        border:none;
        padding: 10px;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 10px;
      }
      </style>
      </div>

      <div class="wrap">
        <div class="search">

          <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
      <div class="flex flex-wrap -m-2">


        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=akola%20medical%20store%20%2Cakola&rlz=1C1NDCM_enIN941IN941&oq=akola+medical+store+%2Cakola&aqs=chrome..69i57j0i30.10935j0j7&sourceid=chrome&ie=UTF-8&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!2m1!1e3!3sIAE,lf:1,lf_ui:3&tbm=lcl&rflfq=1&num=10&rldimm=522210451454068699&lqi=Chpha29sYSBtZWRpY2FsIHN0b3JlICxha29sYUjUrbDMiquAgAhaLxABEAIQAxgAGAEYAhgDIhlha29sYSBtZWRpY2FsIHN0b3JlIGFrb2xhKgQIAxABkgEJZHJ1Z3N0b3JlqgEVEAEqESINbWVkaWNhbCBzdG9yZSgA&ved=2ahUKEwjZtvqQnpryAhVN8HMBHYOJAP8QvS4wAHoECAoQGA&rlst=f#rlfi=hd:;si:522210451454068699,l,Chpha29sYSBtZWRpY2FsIHN0b3JlICxha29sYUjUrbDMiquAgAhaLxABEAIQAxgAGAEYAhgDIhlha29sYSBtZWRpY2FsIHN0b3JlIGFrb2xhKgQIAxABkgEJZHJ1Z3N0b3JlqgEVEAEqESINbWVkaWNhbCBzdG9yZSgA;mv:[[20.720489999999998,77.03428819999999],
          [20.6813081,76.98986889999999]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!2m1!1e3!3sIAE,lf:1,lf_ui:3">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="akola.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Akola Medical Stores</h2>
              <p class="text-gray-500">086000 97778</p>
              <p>Akola</p>
            </div>
          </a>
          </div>
        
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=bhuskat+medicals+%2Cakola&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=_QgMYaamMczB3LUP_8aPoAY&oq=bhuskat+medicals+%2Cakola&gs_l=psy-ab.3...48180.61341.0.61972.35.27.0.0.0.0.291.3158.0j8j7.15.0....0...1c.1.64.psy-ab..21.4.916...0i7i30k1j0i7i10i30k1j0i8i7i30k1j0i7i5i30k1j0i333k1.0.95xJcNs88yg#rlfi=hd:;si:14708027579281656257,l,ChdiaHVza2F0IG1lZGljYWxzICxha29sYUjmm5-sq6-AgAhaJBAAEAEQAhgAGAEYAiIWYmh1c2thdCBtZWRpY2FscyBha29sYZIBCWRydWdzdG9yZQ,y,T2mTSsJg6jo;
          mv:[[21.08923677731903,77.06259709712988],[21.088876822680973,77.06221130287012]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="bhuskat.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Bhuskat Medicals</h2>
              <p class="text-gray-500"> 7947082697</p>
              <p>Akola</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=m.%20p.%20generic%20medical%20store%20akola&rlz=1C1NDCM_enIN941IN941&ei=tgkMYaLfM4XEz7sPxP-iiA8&oq=m.+p.+generic+medical+store+akola&gs_lcp=Cgdnd3Mtd2l6EAMyBwghEAoQoAE6BwgAEEcQsAM6BQghEJIDOgQIIRAVSgQIQRgAUMQHWIccYKMjaAFwAngAgAH0AYgB-AuSAQMyLTeYAQCgAQHIAQjAAQE&sclient=gws-wiz&ved=2ahUKEwidrMb8npryAhWCX3wKHS1iBpAQvS4wAHoECAkQGA&uact=5&tbs=lf:1,lf_ui:3&tbm=lcl&rflfq=1&num=10&rldimm=8878869139753873719&lqi=CiFtLiBwLiBnZW5lcmljIG1lZGljYWwgc3RvcmUgYWtvbGGSAQhwaGFybWFjeaoBHRABKhkiFWdlbmVyaWMgbWVkaWNhbCBzdG9yZSgA&rlst=f#rlfi=hd:;si:8878869139753873719,l,CiFtLiBwLiBnZW5lcmljIG1lZGljYWwgc3RvcmUgYWtvbGGSAQhwaGFybWFjeaoBHRABKhkiFWdlbmVyaWMgbWVkaWNhbCBzdG9yZSgA;mv:[[20.7348225,77.0350356],
          [20.674521499999997,76.9724967]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!2m1!1e3!3sIAE,lf:1,lf_ui:3">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="genericart.jfif">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">M. P. Generic Medical Stores</h2>
              <p class="text-gray-500"> 7947168801</p>
              <p>Akola</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=Maharashtra%20%20Medical%20Amravati&rlz=1C1NDCM_enIN941IN941&ei=vAkMYZ3eIoK_8QOtxJmACQ&oq=Maharashtra++Medical+Amravati&gs_lcp=Cgdnd3Mtd2l6EAM6CAguEJECEJMCOgUIABCRAjoLCAAQgAQQsQMQgwE6EQguEIAEELEDEIMBEMcBENEDOgoIABCxAxCDARBDOgsILhCABBDHARCjAjoKCAAQkQIQRhD7AToFCC4QkQI6BAgAEEM6BAguEEM6EQguEIAEELEDEIMBEMcBEKMCOg0ILhDHARCvARBDEJMCOggILhCxAxCRAjoLCAAQsQMQgwEQkQI6CgguEMcBEK8BEEM6CwguEIAEELEDEIMBOgUIABCABDoICAAQgAQQsQM6CwguEMcBEK8BEJECOggIABCxAxCRAjoTCC4QsQMQgwEQxwEQrwEQQxCTAjoICAAQgAQQyQM6CwguEIAEEMcBENEDOhQILhCABBCxAxCDARDHARCvARCTAjoLCC4QgAQQxwEQrwE6BggAEBYQHjoICCEQFhAdEB46CAgAEAgQDRAeSgQIQRgAULa4AVjIywNg7c0DaARwAngAgAGRAogB6TGSAQYwLjI0LjmYAQCgAQGwAQDAAQE&sclient=gws-wiz&ved=2ahUKEwistImXoJryAhXU7HMBHdB2Bh8QvS4wAHoECAkQKw&uact=5&tbs=lf:1,lf_ui:10&tbm=lcl&rflfq=1&num=10&rldimm=17932305537390443657&lqi=Ch1NYWhhcmFzaHRyYSAgTWVkaWNhbCBBbXJhdmF0aUizld6gqq-AgAhaLBABEAIYABgBGAIiHG1haGFyYXNodHJhIG1lZGljYWwgYW1yYXZhdGkqAggCkgEUbWVkaWNhbF9zdXBwbHlfc3RvcmU&phdesc=wUrSpKMrEic&rlst=f#rlfi=hd:;si:17932305537390443657,l,Ch1NYWhhcmFzaHRyYSAgTWVkaWNhbCBBbXJhdmF0aUizld6gqq-AgAhaLBABEAIYABgBGAIiHG1haGFyYXNodHJhIG1lZGljYWwgYW1yYXZhdGkqAggCkgEUbWVkaWNhbF9zdXBwbHlfc3RvcmU,y,wUrSpKMrEic;mv:[[20.9510431,77.7735045],
          [20.9445227,77.761917]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:10">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="mahmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Maharashtra Medical</h2>
              <p class="text-gray-500">088550 70408</p>
              <p>Amravati</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=RJ++Medical+Amravati&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=BAsMYaqwN4nhz7sPopCR2Ao&oq=RJ++Medical+Amravati&gs_l=psy-ab.3...17988.19488.0.20151.3.3.0.0.0.0.338.719.0j2j0j1.3.0....0...1c.1.64.psy-ab..0.2.381...0i7i30k1j0i512k1j0i8i7i30k1.0.RkuwuwZfxCI#rlfi=hd:;si:7264008405542736085,l,ChRSSiAgTWVkaWNhbCBBbXJhdmF0aUiC89SZ5bOAgAhaJxAAEAEYABgBGAIiE3JqIG1lZGljYWwgYW1yYXZhdGkqBggCEAAQAZIBCHBoYXJtYWN5,
          y,iwfGk9mG8dg;mv:[[20.931576677319025,77.78093909337649],[20.93121672268097,77.78055370662351]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="rjmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Rj Medical</h2>
              <p class="text-gray-500">7947352802</p>
              <p>Amravati</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.justdial.com/Amravati/Sai-Janadhar-Aushadhi-Seva-Generic-Medical-Store-Near-Ravi-Nagar-Rajapeth/9999PX721-X721-180611140451-M4Y6_BZDET'4">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="janmed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Sai Janadhar Aushadhi Seva Generic Medical Store </h2>
              <p class="text-gray-500">7620194415</p>
              <p>Amravati</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Asian+Pharmacy/@19.1192444,74.7348928,15z/data=!4m5!3m4!1s0x0:0x71f707f0aabfa5f4!8m2!3d19.1192444!4d74.7348928">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="asianph.jfif">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Asian Pharmacy</h2>
              <p class="text-gray-500">8045791145</p>
              <p>Ahmednagar</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Shripad+Medical+Shop/@19.0960437,74.711987,13z/data=!4m9!1m2!2m1!1sshreepad+medicals,+Ahmednagar,+Maharashtra!3m5!1s0x3bdcba90751e8f71
          :0x9f5cd503b219f5fc!8m2!3d19.0981019!4d74.7325605!15sCipzaHJlZXBhZCBtZWRpY2FscywgQWhtZWRuYWdhciwgTWFoYXJhc2h0cmFaKiIoc2hyZWVwYWQgbWVkaWNhbHMgYWhtZWRuYWdhciBtYWhhcmFzaHRyYZIBFG1lZGljYWxfc3VwcGx5X3N0b3Jl">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="shreemed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Shreepad Medicals</h2>
              <p class="text-gray-500">7947368416</p>
              <p>Ahmednagar</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Swaraj+Generic+medical+store/@19.108908,74.7420595,15z/data=!4m2!
          3m1!1s0x0:0x59b0ee487176ac11?sa=X&ved=2ahUKEwjY55j0o5ryAhUzIbcAHUGwDNkQ_BIwE3oECEMQBQ">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="swarajmed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Swaraj Generic medical store</h2>
              <p class="text-gray-500">095037 58454</p>
              <p>Ahmednagar</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Panchasheel+Medical+Stores/@19.8691194,75.3453716,17z/data=!
          3m1!4b1!4m5!3m4!1s0x3bdba2846356b9db:0x1704000cfa6c5bdf!8m2!3d19.8691377!4d75.3475165">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="panchmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Panchasheel Medical Stores</h2>
              <p class="text-gray-500">0240 233 1195</p>
              <p>Aurangabad</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Sai+Sanketh+Medical+Stores/@19.8593798,75.3442714,17z/data=!
          3m1!4b1!4m5!3m4!1s0x3bdba27e0d248fad:0x94bcbf16f5e714c6!8m2!3d19.8593668!4d75.3464677">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="saimed.jpg">
            <div class="flex-gro  w">
              <h2 class="text-gray-900 title-font font-medium">Sai Sanket Medical</h2>
              <p class="text-gray-500">7947082216</p>
              <p>Aurangabad</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/YES+PHARMA+GENERIC+MEDICAL/@19.8954442,75.3520811,17z/data=!3m1!4b1!
          4m5!3m4!1s0x3bdba2babd6ece41:0xa9daa755f728fc0a!8m2!3d19.8954443!4d75.3542376">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="yesmed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Yes Pharma</h2>
              <p class="text-gray-500">7947366962</p>
              <p>Aurangabad</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.justdial.com/Beed/Soham-Medical-General-Store-Ruinalkol-Ruinalkol/9999P2442-2442-181013155632-V1D7_BZDET">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="sohmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Soham Medical</h2>
              <p class="text-gray-500">7947155573</p>
              <p>Beed</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.justdial.com/Beed/Amin-Pharma/9999P2442-2442-140428162325-W5S9_BZDET">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="ampharma.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Amin Pharma</h2>
              <p class="text-gray-500">9595466565</p>
              <p>Beed</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Aman+Medical+And+General+Store/@18.9944941,75.7489528,15z/data=!4m2!
          3m1!1s0x0:0x67611960a10e7436?sa=X&ved=2ahUKEwjSh4W4o5ryAhU34nMBHTOFBwEQ_BIwC3oECD4QBQ">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="ammed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Aman Medical And General Store</h2>
              <p class="text-gray-500">097651 02313</p>
              <p>Beed</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Shree+Ganesh+generic+medicine+store/@20.9177758,79.8590966,15z/data=!
          4m2!3m1!1s0x0:0x6e922f415738fb52?sa=X&ved=2ahUKEwir7d3Ro5ryAhXp63MBHWtRDwIQ_BIwEnoECEYQBQ">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="swastamed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Shree Ganesh Generic Medicine Store</h2>
              <p class="text-gray-500">9403141844</p>
              <p>Bhandara</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/search/mahalakshmi+medical+store+bhandara/@21.1626358,79.6439914,15z/data=!3m1!4b1">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="mahamed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Mahalaxami Medical Stores</h2>
              <p class="text-gray-500">099230 99104</p>
              <p>Bhandara</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Bharat+medical/@20.917546,79.5869516,10z/data=!4m9!1m2!2m1!1sbharat+medical+store+bhanadra!3m5!1s0x3a2b3f7cccc63077:0x8c4fca8a6c0c0d9c!8m2!3d21.1696385!4d79.
          6552861!15sCh1iaGFyYXQgbWVkaWNhbCBzdG9yZSBiaGFuYWRyYVofIh1iaGFyYXQgbWVkaWNhbCBzdG9yZSBiaGFuYWRyYZIBCHBoYXJtYWN5">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="bharatmed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Bharat Medical Store</h2>
              <p class="text-gray-500">9890302170</p>
              <p>Bhandara</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Mauli+Generic+Medical+%26+General+Store/@20.8700821,75.0814505,8z/data=!4m9!1m2!2m1!1smauli+generic+medical!3m5!1s0x3bd9e928f6bedbe5:0x79a2a079478cfc1!8m2!3d20.
          8700821!4d76.202056!15sChVtYXVsaSBnZW5lcmljIG1lZGljYWySAQ5tZWRpY2FsX2NlbnRlcg">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="maulimed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Mauli Generic medical</h2>
              <p class="text-gray-500">9028212942</p>
              <p>Buldhana</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?rlz=1C1NDCM_enIN941IN941&tbm=lcl&q=Parakh+medical+stores+buldhana&spell=1&sa=X&ved=2ahUKEwijgcTzpJryAhXF63MBHXTTAPYQBSgAegQIAxAW&biw=1707&bih=802&dpr=1.13#rlfi=hd:;si:13218395447503190065,l,
          Ch5QYXJha2ggbWVkaWNhbCBzdG9yZXMgYnVsZGhhbmGSAQlkcnVnc3RvcmU;mv:[[20.8911162,76.2174962],[20.8794146,76.19462299999999]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="parakhmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Parakh Medical Stores</h2>
              <p class="text-gray-500">7947339135</p>
              <p>Buldhana</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Vaibhav+Medical+%26+General+Stores/@20.531606,76.171404,17z/data=!3m1!4b1!4m5!3m4!1s0x3bda1e019c0e7c33:0x4ae4b487e015d604!
          8m2!3d20.531606!4d76.173598">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="vaibhavmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Vaibhav Medical & General Stores</h2>
              <p class="text-gray-500">098906 99109</p>
              <p>Buldhana</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href=https://www.google.com/search?q=waghade%20generic%20medicine%20store%20chandrapur%20maharashtra&rlz=1C1NDCM_enIN941IN941&ei=iBAMYeTOG83A3LUP7LKU4AI&oq=waghade+generic+medicine+store+chandra&gs_lcp=Cgdnd3Mtd2l6EAEYATIFCCEQoAEyBQghEKABOggIABCwAxDNAjoFCCEQkgM6BAghEBU6BwghEAoQoAFKBAhBGAFQtylY1Uhg9VdoAXAAeACAAesBiAGnD5IBAzItOZgBAKABAcgBAcABAQ&sclient=gws-wiz&tbs=lf:1,lf_ui:3&tbm=lcl&rflfq=1&num=10&rldimm=12022847021356351904&lqi=CjV3YWdoYWRlIGdlbmVyaWMgbWVkaWNpbmUgc3RvcmUgY2hhbmRyYXB1ciBtYWhhcmFzaHRyYZIBDm1lZGljYWxfY2VudGVyqgEmEAEqIiIed2FnaGFkZSBnZW5lcmljIG1lZGljaW5lIHN0b3JlKAA&ved=2ahUKEwj3gpPApZryAhU1meYKHZ1ZBe4QvS4wAXoECAoQIg&rlst=f#rlfi=hd:;si:12022847021356351904,l,CjV3YWdoYWRlIGdlbmVyaWMgbWVkaWNpbmUgc3RvcmUgY2hhbmRyYXB1ciBtYWhhcmFzaHRyYZIBDm1lZGljYWxfY2VudGVyqgEmEAEqIiIed2FnaGFkZSBnZW5lcmljIG1lZGljaW5lIHN0b3JlKAA;mv:[[20.009024699999998,79.31535199999999],
          [19.9313277,79.2822491]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!2m1!1e3!3sIAE,lf:1,lf_ui:3">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="waghmed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Waghade Generic Medicine Stores</h2>
              <p class="text-gray-500">8275074800</p>
              <p>Chandrapur</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Janardan+Medical+Stores/@19.9580012,79.2935597,17z/data=!3m1!4b1!4m5!3m4!1s0x3bd2d42b55ffe887:0x1ddb52a705eb17b0!8m2!3d19.9580018!4d79.2957512">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="janardhanmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Janardan Medical Stores</h2>
              <p class="text-gray-500">098229 20339</p>
              <p>Chandrapur</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Rohini+Medicals/@19.9736395,79.2837894,17z/data=!3m1!4b1!4m5!3m4!1s0x3bd2d676ea6eb479:0x75d4dbdc24fc0fc3!8m2!3d19.9736395!4d79.2859834">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="rohimed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Rohini Medical</h2>
              <p class="text-gray-500">7947338056</p>
              <p>Chandrapur</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Bhagat+Medical+Stores+Parola+Road+Dhule-424001/@20.9034731,74.7753919,17z/data=!3m1!4b1!
          4m5!3m4!1s0x3bdec5dd161da86d:0xecc4b1b25dc757d0!8m2!3d20.9034806!4d74.7775884">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="bhagatmed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Bhagat Medical Stores</h2>
              <p class="text-gray-500">02562 232 952</p>
              <p>Dhule</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Shree+Ram+Medical/@20.9024416,74.7655319,17z/data=!4m9!1m2!2m1!1sram+medical+and+general++store+dhule!3m5!1s0x3bdec5ed4caa81c9:0x9628d3ec0ff993c4!8m2!3d20.
          9024416!4d74.7677206!15sCiRyYW0gbWVkaWNhbCBhbmQgZ2VuZXJhbCAgc3RvcmUgZGh1bGWSARRtZWRpY2FsX3N1cHBseV9zdG9yZQ">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="jaymed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Ram Medical And General Store</h2>
              <p class="text-gray-500">9766920222</p>
              <p>Dhule</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Chetan+Medical/@20.9247021,74.7746022,17z/data=!3m1!4b1!4m5!3m4!
          1s0x3bdec581b9f68665:0x2cde30d00f0477f9!8m2!3d20.9246935!4d74.7767949">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="chetmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Shree Chetan Medical & Surgical General Store</h2>
              <p class="text-gray-500">8513958271</p>
              <p>Dhule</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Wellmade+Generic+Medical+Store/@20.1706024,79.9739175,17z/data=!3m1!4b1!4m5!3m4!
          1s0x3a2cfbfba8938ecd:0x866f3080a237b384!8m2!3d20.1705935!4d79.9761098">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="wellmademed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Wellmade Generic Medical Store</h2>
              <p class="text-gray-500">070570 67890</p>
              <p>Gadchiroli</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/MedSmart+-+Generic+Medicine+Shop/@20.1816432,80.004104,17z/data=!
          3m1!4b1!4m5!3m4!1s0x3a2cfb19870c184f:0x808ac7e135553a64!8m2!3d20.1816432!4d80.006298">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="medsmart.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">MedSmart - Generic Medicine Shop</h2>
              <p class="text-gray-500">07132 233 596</p>
              <p>Gadchiroli</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Markandey+Medical/@20.1820843,80.0035764,17z/data=!3m1!4b1!4m5!3m4!1s0x3a2cfbd686e7a611:0x29af5f6507068d03!8m2!3d20.1820808!4d80.0057523">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="markmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Markandey Medical</h2>
              <p class="text-gray-500">07132 234 553</p>
              <p>Gadchiroli</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Bagga+Generic+Medical+Gondia./@21.463722,80.1892336,17z/data=!3m1!4b1!4m5!3m4!1s0x3a2baeac458567f3:0x8100b1a830dcf46f!8m2!3d21.463722!4d80.1914276">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="gondiamed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Bagga Generic Medical </h2>
              <p class="text-gray-500"> 07182 251 252</p>
              <p>Gondia</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Vikas+Medical+Stores/@21.4593912,80.191104,17z/data=!4m12!1m6!3m5!1s0x3a2baeb2662aa215:
          0x8f77c7a51b6d9ecc!2sVikas+Medical+Stores!8m2!3d21.4593706!4d80.1910295!3m4!1s0x3a2baeb2662aa215:0x8f77c7a51b6d9ecc!8m2!3d21.4593706!4d80.1910295">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="vikmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Vikas Medical Stores </h2>
              <p class="text-gray-500"> 096899 10247</p>
              <p>Gondia</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Ayushya+Medical+Stores/@21.464446,80.1908475,17z/data=!3m1!4b1!4m5!3m4!1s0x3a2baeac2810d28d:0x12d69590ddb8700a!8m2!3d21.4644541!4d80.1930458">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="ayumed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Ayushya Medical Stores</h2>
              <p class="text-gray-500"> 098220 86368</p>
              <p>Gondia</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Akhre+Medical/@19.7186797,77.1425012,17z/data=!3m1!4b1!4m5!3m4!1s0x3bd05254f673febb:0x29c3a148f2af96c1!8m2!3d19.7186835!4d77.1447005">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="akharemed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Akhre Medical</h2>
              <p class="text-gray-500"> 094231 41218</p>
              <p>Hingoli</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/MATOSHREE+SWAST+AUSHADHI+SEVA/@19.7177158,77.1413224,17z/data=!
          3m1!4b1!4m5!3m4!1s0x3bd052546549ab6b:0x18f03b59e4ca47c9!8m2!3d19.7177414!4d77.1434952">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="matomed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">MATOSHREE SWAST AUSHADHI SEVA</h2>
              <p class="text-gray-500">09767769828</p>
              <p>Hingoli</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Jan+Aushadhi+Store/@19.7177158,77.1413116,17z/data=!4m9!1m2!2m1!1sjan+aushadhi+store+hingoli!3m5!1s0x3bd0525581944895:0x6a41525c3ce8fc1d!8m2!3d19.7185995!4d77.
          148233!15sChpqYW4gYXVzaGFkaGkgc3RvcmUgaGluZ29saSIDiAEBkgEVcHVibGljX21lZGljYWxfY2VudGVy">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="janaush.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Jan Aushadhi Store</h2>
              <p class="text-gray-500">09657857040</p>
              <p>Hingoli</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.justdial.com/Jalgaon/Amalner-swast-aushadhi-karya-generic-medicine-store-NrVijay-Maruti-Mandir-OppSwami-Samarth-Mandir-Gate-Amalner-Jalgaon/9999PX257-X257-190624022412-R6Z7_BZDET">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="amalmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Amalner Swast Aushadhi Karya Generic Medicine Store</h2>
              <p class="text-gray-500">9373169593</p>
              <p>Jalgaon</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Jan+Aushadhi+Store/@20.9996637,75.5463335,14z/data=!4m9!1m2!2m1!1sjalgaon+swasta+aushadhi+seva+generic+store!3m5!1s0x3bd90fafffffffff:0xe62516ae47e99597!8m2!3d21.0077112!4d75.
          5627408!15sCilqYWxnYW9uIHN3YXN0IGF1c2hhZGhpIHNldmEgZ2VuZXJpYyBzdG9yZZIBCHBoYXJtYWN5">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="jalgaonmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Jalgaon Swasta Aushadi Seva Generic </h2>
              <p class="text-gray-500">08007705980</p>
              <p>Jalgaon</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/The+Jalgaon+Medical+Stores/@21.0098482,75.5556513,16z/data=!4m9!1m2!2m1!1sthe+jalgaon+medical+store+!3m5!1s0x3bd90fa394a5802b:0x859cf5b12f211bed!8m2!3d21.0148877!
          4d75.5669413!15sChl0aGUgamFsZ2FvbiBtZWRpY2FsIHN0b3JlWhsiGXRoZSBqYWxnYW9uIG1lZGljYWwgc3RvcmWSAQlkcnVnc3RvcmU">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="thejalmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">The Jalgaon Medical Stores</h2>
              <p class="text-gray-500">02572239943</p>
              <p>Jalgaon</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Jan+Aushadhi+Store/@19.8545747,75.8523895,13z/data=!4m9!1m2!2m1!1sjan+aushadhi+store+jalna!3m5!1s0x3bda57651ff9cead:0x78b765360c9dd94d!
          8m2!3d19.8254129!4d75.8911122!15sChhqYW4gYXVzaGFkaGkgc3RvcmUgamFsbmEiA4gBAZIBCHBoYXJtYWN5">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="jalnamed.jfif">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Jan Aushadhi Store</h2>
              <p class="text-gray-500">  099235 75586</p>
              <p>Jalna</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Raj+Medical+Stores/@19.8479383,75.8994925,17z/data=!3m1!4b1!4m5!3m4!1s0x3bda59e2cc8361df:0x90f53a7649884957!8m2!3d19.8479383!4d75.9016865">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="rajmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Raj Medical Stores</h2>
              <p class="text-gray-500"> 02482 235 729</p>
              <p>Jalna</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Ashwini+Pharma/@19.827922,75.8784385,17z/data=!3m1!4b1!4m5!3m4!1s0x3bda576c6ea916df:0x4152d98e5a8d02cb!8m2!3d19.827922!4d75.8806325">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="ashmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Ashwini Pharma</h2>
              <p class="text-gray-500"> 072760 18030</p>
              <p>Jalna</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Generic+Medical+Store/@16.6954175,74.2063023,13z/data=!4m9!1m2!2m1!1sgeneric+medical+store+kolhapur!3m5!1s0x3bc1006aa502d0f9:0x206ec567c517b50b!8m2!3d16.7008794!4d74.2407592!
          15sCh5nZW5lcmljIG1lZGljYWwgc3RvcmUga29saGFwdXKSARRtZWRpY2FsX3N1cHBseV9zdG9yZQ">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="genmedkol.png">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Generic Medical Store</h2>
              <p class="text-gray-500">090282 90713</p>
              <p>Kolhapur</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Kolhapur+Swast+Aushadhi+Seva/@16.7050975,74.2389731,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc1006a063b242b:0xd9fe01b594e06e2!8m2!3d16.7051113!4d74.2411618">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="kolgenmed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Kolhapur Swast Aushadhi Seva</h2>
              <p class="text-gray-500">098505 10026</p>
              <p>Kolhapur</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/New+Janata+Generic+Medical+Store/@16.695165,74.2416049,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc1003e7b280423:0xcc5463b406f0d99!8m2!3d16.6951486!4d74.2438013">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="newgenmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">New Janata Generic Medical Store
              </h2>
              <p class="text-gray-500">077769 21462</p>
              <p>Kolhapur</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/SATYAM+MEDICAL+AND+DISTRIBUTORS/@18.3923265,76.5791019,17z/data=!3m1!4b1!4m5!3m4!1s0x3bcf83d7ad1b234d:0x72fb457eca92e150!8m2!3d18.3923254!4d76.5813006">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="satyammed.jfif">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Satyam Medical and Distributors</h2>
              <p class="text-gray-500"> 090967 95968</p>
              <p>Latur</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Jan+Aushadhi+store/@18.3923259,76.572466,15z/data=!4m9!1m2!2m1!1sjan+aushadhi+store+latur!3m5!1s0x3bcf83ecd0bd05c1:
          0x256f090c88d99c60!8m2!3d18.3997413!4d76.5641159!15sChhqYW4gYXVzaGFkaGkgc3RvcmUgbGF0dXIiA4gBAZIBCHBoYXJtYWN5">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="janaushlatur.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Jan Aushadhi Store</h2>
              <p class="text-gray-500">099226 60079</p>
              <p>Latur</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Madhav+Medical+%26+Distributors/@18.4180962,76.5685678,17z/data=!3m1!4b1!4m5!3m4!1s0x3bcf83f4df18caaf:0xe4e5ad02a87f578f!8m2!3d18.4180971!4d76.5707592">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="madhavmed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Madhav Medical & Distributors</h2>
              <p class="text-gray-500">097300 38090</p>
              <p>Latur</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/SWASTHYA+GENERIC+MEDICAL/@18.9663138,72.8372257,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7cff0692dc987:0x6f46b40fa914726f!8m2!3d18.9663138!4d72.8394197">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="swasthyamed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">SWASTHYA GENERIC MEDICAL</h2>
              <p class="text-gray-500"> 022 2372 6905</p>
              <p>Mumbai</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Miraroad+Genericart+Medicine+-+Generic+Medicine+Store/@19.2860314,72.8564145,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7b10ccf17d06d:0x87606578283b08af!8m2!3d19.2860314!4d72.8586085">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="miragenmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Miraroad Genericart Medicine - Generic Medicine Store
              </h2>
              <p class="text-gray-500">  090045 09233</p>
              <p>Mumbai</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Arogyams+Generic+Medical/@19.0859302,72.8351345,12z/data=!4m9!1m2!2m1!1sarogyam+generic+medical+mumbai!3m5!1s0x3be7c62c995d84cf:0xfdf3b26944961800!8m2!3d19.085885!4d72.9053609!15sCh5hcm9neWFtIG
          dlbmVyaWMgbWVkaWNhbCBtdW1iYWlaICIeYXJvZ3lhbSBnZW5lcmljIG1lZGljYWwgbXVtYmFpkgEIcGhhcm1hY3maASRDaGREU1VoTk1HOW5TMFZKUTBGblNVTjNjbEJFY2pOQlJSQUI">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="arogyammed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Arogyam Generic Medical</h2>
              <p class="text-gray-500"> 022 2512 2777</p>
              <p>Mumbai</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Nagpur+24+medical+store/@21.1339548,79.0181841,13z/data=!4m9!1m2!2m1!1snagpur+24+medical+store+!3m5!1s0x3bd4c17cc50fc041:0xcad64930188d1d0b!8m2!3d21.
          1721494!4d79.1001366!15sChduYWdwdXIgMjQgbWVkaWNhbCBzdG9yZZIBCHBoYXJtYWN5">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="nagpurmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Nagpur 24 medical store</h2>
              <p class="text-gray-500">095954 47031</p>
              <p>Nagpur</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/PRAGATI+GENERIC+MEDICAL+STORES/@21.1339476,79.0180124,13z/data=!4m9!1m2!2m1!1spragatigeneric+medical+store+nagpur!3m5!1s0x3bd4c1734d7f92b7:0x854b917abf745b1e!8m2!3d21.
          1911582!4d79.07089!15sCiRwcmFnYXRpIGdlbmVyaWMgbWVkaWNhbCBzdG9yZSBuYWdwdXKSARRtZWRpY2FsX3N1cHBseV9zdG9yZQ">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="pragmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">PRAGATI GENERIC MEDICAL STORES
              </h2>
              <p class="text-gray-500">097642 29339</p>
              <p>Nagpur</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Generic+medicine/@21.1002909,79.0675423,13z/data=!4m9!1m2!2m1!1sgeneric+medicine+nagpur!3m5!1s0x3bd4bf6c8da52387:0xb806a9cc27c20086!8m2!
          3d21.1002995!4d79.1025633!15sChdnZW5lcmljIG1lZGljaW5lIG5hZ3B1cpIBCHBoYXJtYWN5">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="genrimed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Generic medicine</h2>
              <p class="text-gray-500">090960 65569</p>
              <p>Nagpur</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Generic+medicine+store/@19.9515057,73.7994918,13z/data=!4m9!1m2!2m1!1sgeneric+medicine+store+nashik!3m5!1s0x3bdd95513df7132d:0x48985a773461e75b!8m2!3d19.9515057!4d73.8345107!15sCh1nZW5lcmljIG1lZGljaW5lIHN0b3JlIG5hc2hpa1ofIh1nZW5lcmljIG1lZGljaW5lIHN0b3JlIG5hc2hpa5IBFG1lZG
          ljYWxfc3VwcGx5X3N0b3JlmgEjQ2haRFNVaE5NRzluUzBWSlEwRm5TVU5CT1RWdVJFRlJFQUU">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="genericmednashik.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Generic medicine store</h2>
              <p class="text-gray-500">096234 49661</p>
              <p>Nashik</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Shriram+Generic+Medicine+Stores/@19.9514988,73.7993201,13z/data=!4m9!1m2!2m1!1sshriram+generic+medicine+store+nashik!3m5!1s0x3bddeb5956949459:0xb9784a662c318dd3!8m2!3d19.968468!4d73.7534117!15sCiV
          zaHJpcmFtIGdlbmVyaWMgbWVkaWNpbmUgc3RvcmUgbmFzaGlrWiciJXNocmlyYW0gZ2VuZXJpYyBtZWRpY2luZSBzdG9yZSBuYXNoaWuSAQlkcnVnc3RvcmU">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="shreeramgenmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Shriram Generic Medicine Stores
              </h2>
              <p class="text-gray-500">090110 11578</p>
              <p>Nashik</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/New+Ekdant+Generic+Medicine+Store/@20.0411823,73.8029487,17z/data=!3m1!4b1!4m5!3m4!1s0x3bddea2fb735df43:0x4220f7b50f92dc4c!8m2!3d20.0411823!4d73.8051427">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="ekdantmed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">New Ekdant Generic Medicine Store
              </h2>
              <p class="text-gray-500">  094237 16707</p>
              <p>Nashik</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Jan+Aushadhi+Store/@19.1980417,77.2645712,12z/data=!4m9!1m2!2m1!1sjan+aushadhi+store+nanded!3m5!1s0x3bd1d65b12f35bfb:0x2fa4842d070a82c1!8m2!3d19.
          1626505!4d77.3169881!15sChlqYW4gYXVzaGFkaGkgc3RvcmUgbmFuZGVkIgOIAQGSAQhwaGFybWFjeQ">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="janaushmednanded.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Jan Aushadhi Store
              </h2>
              <p class="text-gray-500">  099707 99199</p>
              <p>Nanded</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Davaindia+Generic+Pharmacy/@19.1586777,77.1679924,11z/data=!4m9!1m2!2m1!1sDava+india+generic+pharmacy+nanded!3m5!1s0x3bd1d705803018df:0x55d70df941cc5212!8m2!3d19.1586777!4d77.
          3080681!15sCiJEYXZhIGluZGlhIGdlbmVyaWMgcGhhcm1hY3kgbmFuZGVkkgEIcGhhcm1hY3k">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="davaindiamed.jfif">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Davaindia Generic Pharmacy</h2>
              <p class="text-gray-500"> 088888 73000</p>
              <p>Nanded</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Faroqi+Medical+%26+General+Store/@19.1532399,77.3346409,17z/data=!3m1!4b1!4m5!3m4!1s0x3bd1d7b5c7d51e85:0x278e5845bd9e040e!8m2!3d19.153253!4d77.3368396">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="swastamed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Faroqi Medical & General Store</h2>
              <p class="text-gray-500"> 099707 97973</p>
              <p>Nanded</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=samarth+medical+store+nandurbar&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=gBcMYcSkOLSW4-EP29OryAU&oq=samarth+medical+store+nandurbar&gs_l=psy-ab.3..0i333k1.12616.17887.0.18658.11.11.0.0.0.0.278.1543.0j6j2.8.0....0...1c.1.64.psy-ab..3.6.1190....0.dVXSxR4Ne0Q#rlfi=hd:;si:12531016667934939714,l,Ch9zYW1hcnRoIG1lZGljYWwgc3RvcmUgbmFuZHVyYmFySKCN2vaYqoCACFovEAAQARACGAAYARgCGAMiH3NhbWFydGggbWVkaWNhbCBzdG9yZSBuYW5kdXJiYXKSAQhwaGFybWFjeao
          BHRABKhkiFXNhbWFydGggbWVkaWNhbCBzdG9yZSgA;mv:[[21.8509088,74.2452426],[21.3364035,74.214591]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="shivaimed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Shivai medical store</h2>
              <p class="text-gray-500"> 077589 88424</p>
              <p>Nandurbar</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=jain+enterprises+medical+wholesale+and+retails+and+quality+nandurbar&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=lBcMYZXxMPyF4-EP9rGsmA4&oq=jain+enterprises+medical+wholesale+and+retails+and+quality+nandurbar&gs_l=psy-ab.3...21435.51990.0.52287.59.59.0.0.0.0.375.7948.0j35j7j1.43.0....0...1c.1.64.psy-ab..21.6.1044...0i433i273k1j0i67k1j0i433i67k1j0i512k1j0i7i30k1j0i7i5i30k1j0i5i30k1j0i8i30k1j0i8i13i30k1j33i10k1.0.1-1cOT_eP9E#rlfi=hd:;si:7177449359614054128,l,CkRqYWluIGVudGVycHJpc2VzIG1lZGljYWwgd2hvbGVzYWxlIGFuZCByZXRhaWxzIGFuZCBxdWFsaXR5IG5hbmR1cmJhckjMjNiUjquAgAhaZhAAEAEQAhADEAQQBRAGEAcYABgBGAIYAxgEGAUYBhgHIkRqYWluIGVudGVycHJpc2VzIG1lZGljYWwgd2hvbGVzYWxlIGFuZCByZXRhaWxzIGFuZCBxdWFsaXR5IG5hbmR1cmJhcpIBDm1lZGljYWxfY2VudGVyqgFCEAEqPiI6amFpbiBlbnRlcnByaXNlcyBtZWRpY2FsIHdob2xlc2FsZSBhbmQgcmV0YW
          lscyBhbmQgcXVhbGl0eSgA,y,1M8vF0KTf2Q;mv:[[21.6018309,74.50026919999999],[21.156871400000004,73.9345379]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="jainentermed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Jain Enterprises Medical Wholesale and Retails & Quality Generic Store</h2>
              <p class="text-gray-500"> 098814 44831</p>
              <p>Nandurbar</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=jan+aushadhi+storenandurbar&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=yhcMYZrzCquZ4-EP_IaI4AM&oq=jan+aushadhi+storenandurbar&gs_l=psy-ab.3...14736.28357.0.28569.20.19.1.0.0.0.225.2925.0j13j3.16.0....0...1c.1.64.psy-ab..3.4.576...0i13k1j0i433i273k1j0i67k1j0i433i67k1j0i512k1j0i273k1j0i7i30k1j0i7i10i30k1j0i8i7i30k1.0.aQzExwg7juE#rlfi=hd:;si:987779196151598482,l,ChtqYW4gYXVz
          aGFkaGkgc3RvcmVuYW5kdXJiYXKSAQhwaGFybWFjeQ;mv:[[21.4433874,77.4963927],[19.9611494,74.0571439]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="janaushnandurbar.jfif">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Jan Aushadhi Store
              </h2>
              <p class="text-gray-500">070201 74748</p>
              <p>Nandurbar</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=vaidya+medical+osmanabad&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=6BcMYfKgCOGS4-EPmqiqiA8&oq=vaidya+medical+%2C+osmana&gs_l=psy-ab.3.0.33i160k1.15804.33115.0.34121.34.30.4.0.0.0.248.3652.0j19j2.22.0....0...1c.1.64.psy-ab..8.25.3665.0..0i273k1j0i433i131k1j0i512i433i131k1j0i512k1j0i433i131i273k1j0i67k1j0i512i433k1j0i10i67k1j0i22i30k1j0i22i10i30k1j0i13k1j0i13i30k1j33i21k1.195.IZzvypLPUug#rlfi=hd:;si:4220023978276550289,l,Chh2YWlkeWEgbWVkaWNhbCBvc21hbmFiYWSSARRtZWRp
          Y2FsX3N1cHBseV9zdG9yZQ;mv:[[18.19192217731903,76.03929584640801],[18.191562222680975,76.038916953592]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="vaidyamed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Vaidya Medical </h2>
              <p class="text-gray-500"> 096577 44136</p>
              <p>Osmanabad</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=gandhi+medical+osmanabad&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=CxgMYYW_FfeS4-EPtoIN&oq=gandhi+medical+osmanabad&gs_l=psy-ab.3..0i512k1.16913.22022.0.22568.15.15.0.0.0.0.199.1729.0j10.10.0....0...1c.1.64.psy-ab..5.10.1726...0i433i67k1j0i67k1j0i13k1j0i7i30k1j0i8i7i30k1.0.hedRggpSLMk#rlfi=hd:;si:13738089437227991460,l,ChhnYW5kaGkgbWVkaWNhbCBvc21hbmFiYWRIhOvYveWAgIAIWiQQABABGAAYARgCIhhnYW5kaGkgbWVkaWNhbCBvc21hbmFiYWSSAQhwaG
          FybWFjeQ,y,Kyzy3FKKJRo;mv:[[18.18169097731903,76.03799643529464],[18.181331022680972,76.03761756470537]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="gandhimed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Gandhi Medical Stores</h2>
              <p class="text-gray-500">02472 221 593</p>
              <p>Osmanabad</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=jan+aushadhi+osmanabad&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=IhgMYYOMO8WR4-EP--SBoAE&oq=jan+aushadhi+osmanabad&gs_l=psy-ab.3...11702.21211.0.23576.26.18.0.0.0.0.345.1941.0j8j1j1.10.0....0...1c.1.64.psy-ab..17.3.689...0i13k1j0i433i67k1j0i512k1j0i67k1j0i7i30k1j0i7i10i30k1j0i8i7i30k1.0.TTwTAyjiuoQ#rlfi=hd:;si:17228130217729606093,l,ChZqYW4gYXVzaGFkaGkgb3NtYW5hYmFkkgEVcHVib
          GljX21lZGljYWxfY2VudGVyqgEUEAEqECIMamFuIGF1c2hhZGhpKCM;mv:[[18.206778399999997,76.1877099],[18.1805319,76.0224638]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="janaushpsma.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Jan Aushadhi Store</h2>
              <p class="text-gray-500"> 083799 77483</p>
              <p>Osmanabad</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=generic+medical+medicare+palghar&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=OxgMYYauJ9KM4-EPyoiGMA&oq=generic+medical+medicare+palghar&gs_l=psy-ab.3..33i160k1.20806.39538.0.40179.37.28.2.7.8.0.202.3556.0j19j1.21.0....0...1c.1.64.psy-ab..7.29.3585.0..0i67k1j0i273k1j0i433i67k1j0i433i131i67k1j0i457i67k1j0i402k1j0i512i433k1j0i512k1j0i512i10k1j0i433i273k1j0i433i131i273k1j0i512i457k1j0i457i13k1j0i13k1j0i457i22i30k1j0i22i30k1j33i22i29i30k1.205.ZTr-bKqLEyI#rlfi=hd:;si:7218392359153749663,l,CiBnZW5lcmljIG1lZGljYWwgbWVkaWNhcmUgcGFsZ2hhckjA05GcgK6AgAhaOhAAEAEQAhgAGAEYAhgDIiBnZW5lcmljIG1lZGljYWwgbWVkaWNhcmUgcGFsZ2hhcioICAIQABABEAKSAQ
          hwaGFybWFjeQ,y,job9zbTOuY0;mv:[[19.694298477319027,72.77133465914588],[19.693938522680973,72.77095234085411]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="jansevamed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">GENERIC MEDICAL MEDICARE
              </h2>
              <p class="text-gray-500">092726 12333</p>
              <p>Palghar</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=generic+medical+medicare+palghar&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=OxgMYYauJ9KM4-EPyoiGMA&oq=generic+medical+medicare+palghar&gs_l=psy-ab.3..33i160k1.20806.39538.0.40179.37.28.2.7.8.0.202.3556.0j19j1.21.0....0...1c.1.64.psy-ab..7.29.3585.0..0i67k1j0i273k1j0i433i67k1j0i433i131i67k1j0i457i67k1j0i402k1j0i512i433k1j0i512k1j0i512i10k1j0i433i273k1j0i433i131i273k1j0i512i457k1j0i457i13k1j0i13k1j0i457i22i30k1j0i22i30k1j33i22i29i30k1.205.ZTr-bKqLEyI#rlfi=hd:;si:7218392359153749663,l,CiBnZW5lcmljIG1lZGljYWwgbWVkaWNhcmUgcGFsZ2hhckjA05GcgK6AgAhaOhAAEAEQAhgAGAEYAhgDIiBnZW5lcmljIG1lZGljYWwgbWVkaWNhcmUgcGFsZ2hhcioICAIQA
          BABEAKSAQhwaGFybWFjeQ,y,job9zbTOuY0;mv:[[19.694298477319027,72.77133465914588],[19.693938522680973,72.77095234085411]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="palmed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Palghar Medical & Provision Store</h2>
              <p class="text-gray-500"> 098500 28022</p>
              <p>Palghar</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=palghar+medical+and+provision+store&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=ZBgMYY76M6qb4-EP8b-iaA&oq=palghar+medical+and+provision+store&gs_l=psy-ab.3..33i22i29i30k1.19460.33558.0.33678.53.35.0.0.0.0.272.4011.0j14j7.21.0....0...1c.1.64.psy-ab..33.20.3826...0i333k1j0i67k1j0i433i67k1j0i433i131i273k1j0i512i433k1j0i273k1j0i512k1j0i512i457k1j0i22i30k1j33i21k1.0.tpIOzeCcc2w#rlfi=hd:;si:15775506015202679439,l,CiNwYWxna
          GFyIG1lZGljYWwgYW5kIHByb3Zpc2lvbiBzdG9yZZIBCHBoYXJtYWN5;mv:[[19.7006819,72.7745375],[19.6916586,72.7603436]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="popmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Popular Medical Store</h2>
              <p class="text-gray-500">098900 49058</p>
              <p>Palghar</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=navjivan+medical+store+parbhani&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=oBgMYZOECLaZ4-EPuI6syAM&oq=navjivan+medical+store+parbhani&gs_l=psy-ab.3..33i160k1.12206.21865.0.22162.38.24.2.12.13.0.259.3365.0j15j3.19.0....0...1c.1.64.psy-ab..5.31.3257.0..0i273k1j0i67k1j0i512i433i131k1j0i433i131i67k1j0i512i433k1j0i457i67k1j0i433i131k1j0i512k1j0i10k1j0i512i457k1j0i457i13k1j0i13k1j33i21k1j33i10i160k1.180.31Aoc7fZnmo#rlfi=hd:;si:7702915245699657597,l,Ch9uYXZqaXZhbiBtZWRpY2FsIHN0b3JlIHBhcmJoY
          W5pkgEIcGhhcm1hY3k;mv:[[19.26333567731903,76.78506255125455],[19.262975722680974,76.78468124874544]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="swastamed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Navjivan Medical Stores</h2>
              <p class="text-gray-500"> 094228 78898</p>
              <p>Parbhani</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=raja+swast+aushadhi+seva+generic+medicine+store+parbhani&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=txgMYemUHpKf4-EPr-GYiAQ&oq=raja+swast+aushadhi+seva+generic+medicine+store+parbhani&gs_l=psy-ab.3..0i333k1.12054.36383.0.36681.54.54.0.0.0.0.286.6750.0j28j7.37.0....0...1c.1.64.psy-ab..17.33.6393.0..0i67k1j0i433i131i67k1j0i512i433i131k1j0i273k1j0i433i131k1j0i457i67k1j0i512i433k1j0i512k1j0i512i457k1j0i512i10k1j0i22i10i30k1j0i13k1j33i21k1j33i402k1.177.-49WS-YEUjM#rlfi=hd:;si:7991356677680583872,l,CjhyYWphIHN3YXN0IGF1c2hhZGhpIHNldmEgZ2VuZXJpYyBtZWRpY2luZSBzdG9yZS
          BwYXJiaGFuaZIBCHBoYXJtYWN5;mv:[[19.279345577319027,76.76269796988123],[19.27898562268097,76.76231663011875]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="swastaaushparbhani.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Raja Swast Aushadhi Seva Generic Medicine Stores
              </h2>
              <p class="text-gray-500">  097664 17379</p>
              <p>Parbhani</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=jan+aushadhi+store+parbhani&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=3RgMYaKEDsqY4-EPoZybmA8&oq=jan+aushadhi+store+parbhani&gs_l=psy-ab.3...10016.31931.0.32280.28.21.0.7.7.0.224.2711.0j13j2.16.0....0...1c.1.64.psy-ab..5.21.2579.0..38j0i67k1j0i457i273k1j0i512i433k1j0i512i433i131k1j0i433i131i67k1j0i433i67k1j0i433i131k1j0i512k1j0i273k1j0i512i457k1j0i22i30k1j33i10i160k1j33i21k1.184.3rKP6LcrY40#rlfi=hd:;si:1336910464510563650,l,ChtqYW4gYXVzaGFkaGkgc3RvcmUgcGFyYmhhbmlIk77C7KmvgIAIWisQABABEAIYABgBGAIYAyIbamFuIGF1c2hhZGhpIHN0b3JlIHBhcmJoYW5pkgEVcHVibGljX21lZGljYWxfY2VudG
          VyqgEaEAEqFiISamFuIGF1c2hhZGhpIHN0b3JlKAA;mv:[[19.280765199999998,76.7991663],[19.2509059,76.76043229999999]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="janaushparbhani.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Jan Aushadhi Store</h2>
              <p class="text-gray-500"> 096370 04607</p>
              <p>Parbhani</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=generic+medical+store+pune&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=_hgMYZXYIN6V4-EPiaq3mAM&oq=generic+medical+store+pune&gs_l=psy-ab.3..0i512k1j0i22i30k1l9.16712.28545.0.28730.33.25.1.5.5.0.231.3210.0j16j2.19.0....0...1c.1.64.psy-ab..9.23.3032.0..0i457i67k1j0i433i67k1j0i512i433i131k1j0i433i131k1j0i512i433k1j0i67k1j0i433i131i273k1j0i273k1j0i433i131i67k1j0i402k1j0i512i457k1.219.8G3yCKYegp4#rlfi=hd:;si:13543516958233987777,l,ChpnZW5lcmljIG1lZGljYWwgc3RvcmUgcHVuZUi5sP6EmKuAgAhaKhAAEAEQAhgAGAEYAhgDIhpnZW5lcmljIG1lZGljYWwgc3RvcmUgcHVuZZIBCWRydWdzdG
          9yZaoBHRABKhkiFWdlbmVyaWMgbWVkaWNhbCBzdG9yZSgA;mv:[[18.6074143,73.9947814],[18.440352,73.75222049999999]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="genmedpune.jfif">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Generic Medical Store
              </h2>
              <p class="text-gray-500">  098603 29828</p>
              <p>Pune</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=generic+medical+store+pune&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=_hgMYZXYIN6V4-EPiaq3mAM&oq=generic+medical+store+pune&gs_l=psy-ab.3..0i512k1j0i22i30k1l9.16712.28545.0.28730.33.25.1.5.5.0.231.3210.0j16j2.19.0....0...1c.1.64.psy-ab..9.23.3032.0..0i457i67k1j0i433i67k1j0i512i433i131k1j0i433i131k1j0i512i433k1j0i67k1j0i433i131i273k1j0i273k1j0i433i131i67k1j0i402k1j0i512i457k1.219.8G3yCKYegp4#rlfi=hd:;si:3344933824071949418,l,ChpnZW5lcmljIG1lZGljYWwgc3RvcmUgcHVuZUjB4-_Uqa6AgAhaKhAAEAEQAhgAGAEYAhgDIhpnZW5lcmljIG1lZGljYWwgc3RvcmUgcHVuZZIBCHBoYXJtY
          WN5qgEdEAEqGSIVZ2VuZXJpYyBtZWRpY2FsIHN0b3JlKAA;mv:[[18.6074143,73.9947814],[18.440352,73.75222049999999]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="nirmaymed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">NIRAMAY GENERIC MEDICAL STORE
              </h2>
              <p class="text-gray-500"> 086985 67939</p>
              <p>Pune</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=vishrantwadi+generic+medical+store&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=NxkMYZv6DPGb4-EPnp6PqAo&oq=vishrantwadi+gene&gs_l=psy-ab.3.0.0i512i457k1.17777.30102.0.31714.20.13.0.7.7.0.383.1985.0j5j2j2.10.0....0...1c.1.64.psy-ab..3.16.2019.0..0i273k1j0i67k1j0i512i433i131k1j0i512k1j0i433i131i67k1j0i512i433k1j0i512i433i457k1j0i457i67k1j0i433i131k1j0i433i131i273k1j0i433i67k1j0i22i30k1.195.2hkKZXmnfmg#rlfi=hd:;si:13906901466892350803,l,CiJ2aXNocmFudHdhZGkgZ2VuZXJpYyBtZWRpY2FsIHN0b3JlSP2im43oroCACFoyEAEQAhADGAAYARgCGAMiInZpc2hyYW50d2FkaSBnZW5lcmljIG1lZGljYWwgc3R
          vcmWSARRtZWRpY2FsX3N1cHBseV9zdG9yZQ,y,ZFIqYudHo38;mv:[[18.576402899999998,73.8802962],[18.5678964,73.8791234]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="vishmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">VISHRANTWADI GENERIC MEDICAL STORE
              </h2>
              <p class="text-gray-500">  099216 64250</p>
              <p>Pune</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=khopoli+swast+aushadhi+seva+generic+medicine+store+raigad&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=WBkMYfXEAr-f4-EPu6CHuAU&oq=khopoli+swast+aushadhi+seva+generic+medicine+store+raigad&gs_l=psy-ab.3..0i333k1.14174.40500.0.40728.50.48.0.2.2.0.400.7127.0j29j4j2j1.37.0....0...1c.1.64.psy-ab..11.34.6430.0..0i273k1j0i512i433i131k1j0i433i131k1j0i512k1j0i67k1j0i433i131i67k1j0i512i433k1j0i457i67k1j0i22i30k1j0i457i22i30k1j33i21k1j33i22i29i30k1j33i10k1j33i402k1.179.ie_yKKvFo3k#rlfi=hd:;si:1475893603811238923,l,CjlraG9wb2xpIHN3YXN0IGF1c2hhZGhpIHNldmEgZ2VuZXJpYyBtZWRpY2luZSBzdG9yZSByYWlnYWRI7IGvrbyugIAIWl8QABABEAIQAxAEEAUQBhgAGAEYAhgDGAQYBRgGIjlraG9wb2xpIHN3YXN0IGF1c2hhZGhpIHNldmEgZ2VuZXJpYyBtZWRpY2luZSBzdG9yZSByYWlnYWQqBggDEAUQBpIBCWRydWdzdG
          9yZQ,y,vexN_UCy_1Y;mv:[[18.784889677319033,73.34300870311824],[18.784529722680976,73.34262849688176]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="hopolimed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Khopoli Swast Aushadhi Seva Generic Medicine Stores
              </h2>
              <p class="text-gray-500"> 094200 55803</p>
              <p>Raigad</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=varad+generic+medical+stores+raigad&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=gRkMYbmzNKWK4-EPpLG24Ac&oq=varad+generic+medical+stores+raigad&gs_l=psy-ab.3...10078.122585.0.122857.35.26.2.7.7.0.288.3337.0j16j2.20.0....0...1c.1.64.psy-ab..6.25.3007.0..38j0i67k1j0i273k1j0i10i67k1j0i512i433k1j0i433i273k1j0i512i433i131k1j0i512k1j0i433i131k1j0i457i273k1j0i402k1j0i512i457k1j0i433i10k1j0i457i13k1j33i22i29i30k1j33i402k1j33i21k1.241.swl61PAuoJY#rlfi=hd:;si:9360491025588265269,l,CiN2YXJhZCBnZW5lcmljIG1lZGljYWwgc3RvcmVzIHJhaWdhZEikxMrc3q6AgAhaQxAAEAEQAhADGAAYARgCGAMYBCIjdmFyYWQgZ2VuZXJpYyBtZWRpY2FsIHN0b3JlcyByYWlnYWQqCggCEAAQARAC
          EAOSAQlkcnVnc3RvcmU,y,O3l4gtGw_jw;mv:[[19.021223577319024,73.0929227718229],[19.020863622680967,73.0925420281771]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="varadmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">VARAD GENERIC MEDICAL STORES
              </h2>
              <p class="text-gray-500"> 098332 17598</p>
              <p>Raigad</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=shree+swami+samartha+generic+medicine+store+raigad&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=GBoMYYirMt2X4-EPyIODiAQ&oq=shree+swami+samartha+generic+medicine+store+raigad&gs_l=psy-ab.3..0i333k1.5862.28550.0.28736.57.42.3.11.11.0.305.6060.0j19j9j2.31.0....0...1c.1.64.psy-ab..12.28.2854.0..0i67k1j0i273k1j0i512i433i131k1j0i433i131k1j0i433i67k1j0i457i67k1j0i512i433k1j0i512k1j0i457i273k1j0i433i131i10k1j0i10k1j0i457i10k1j0i22i30k1j0i22i10i30k1j0i13k1j0i8i13i30k1j0i457i8i13i30k1j33i21k1.181.NKPaDWBB9rY#rlfi=hd:;si:1018278574958484816,l,CjJzaHJlZSBzd2FtaSBzYW1hcnRoYSBnZW5lcmljIG1lZGljaW5lIHN0b3JlIHJhaWdhZEjvl43ljq2AgAhaXhAAEAEQAhADEAQQBRgAGAEYAhgDGAQYBRgGIjJzaHJlZSBzd2FtaSBzYW1hcnRoYSBnZW5lcmljIG1lZGljaW5lIHN0b3JlIHJhaWdhZCoOCAIQABABEAIQAxAEEAWSA
          QhwaGFybWFjeQ,y,lOwfRR7X9hM;mv:[[18.984427777319027,73.12001102972432],[18.98406782268097,73.11963037027566]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="shriswamimed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">SHREE SWAMI SAMARTHA GENERIC MEDICINE STORE.
              </h2>
              <p class="text-gray-500"> 080808 03993</p>
              <p>Raigad</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=wellness+forever+ratnagiri&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=NhoMYf_iIYCa4-EPwO2duAg&oq=wellness+forever+ratnagiri&gs_l=psy-ab.3..0i512k1.10155.18265.0.18561.27.14.0.13.13.0.239.1773.0j9j1.11.0....0...1c.1.64.psy-ab..4.22.1596.0..0i433i273k1j0i67k1j0i273k1j0i433i131i67k1j0i512i457k1j0i402k1j0i512i433i131k1j0i433i457i67k1j0i512i433k1j0i433k1j0i457i273k1j0i433i67k1j0i22i30k1.182.WXnbzT5eyhc#rlfi=hd:;si:13369372354638765821,l,Chp3ZWxsbmVzcyBmb3JldmVyIHJhdG5hZ2lyaSIDiAEBSIP02bPzrYCACFouEAAQARgAGAEYAiIad2VsbG5lc3MgZm9yZXZlciByYXRuYWdpc
          mkqBggCEAAQAZIBCHBoYXJtYWN5;mv:[[16.99088827731903,73.31426029147069],[16.990528322680973,73.31388390852929]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="wellmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Wellness Forever</h2>
              <p class="text-gray-500"> 091688 43093</p>
              <p>Ratnagiri</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/search?q=matoshri+medical+store+ratnagiri&rlz=1C1NDCM_enIN941IN941&tbm=lcl&ei=ShoMYcqoGOL0juMPg7Wf-As&oq=matoshri+medical+store+ratnagiri&gs_l=psy-ab.3..33i10i160k1.13322.24221.0.24564.33.30.0.3.3.0.300.4004.0j15j4j1.21.0....0...1c.1.64.psy-ab..9.23.4013.0..0i273k1j0i67k1j0i433i131i273k1j0i433i131i67k1j0i512i433i131k1j0i512k1j0i512i457k1j0i402k1j0i512i433k1j0i457i10k1j0i512i10k1j0i10k1j0i22i10i30k1j0i22i30k1j0i457i22i30k1j0i457i13k1j33i21k1.185.3URXfpJZ4Qg#rlfi=hd:;si:18231032191646745620,l,CiBtYXRvc2hyaSBtZWRpY2FsIHN0b3JlIHJhdG5hZ2lyaUidgZ7H9bGAgAhaMBAAEAEQAhgAGAEYAhgDIiBtYXRvc2hyaSBtZWRpY2FsIHN0b3JlIHJhdG5hZ2ly
          aZIBCHBoYXJtYWN5qgEeEAEqGiIWbWF0b3NocmkgbWVkaWNhbCBzdG9yZSgA;mv:[[16.9953334,73.33043880000001],[16.9872281,73.288944]]">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="matmed.jfif">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Matoshri Medical Stores
              </h2>
              <p class="text-gray-500"> 097630 62983</p>
              <p>Ratnagiri</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/cepE1qxyLs5ouTTv8">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="wellmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Dabhole Generic Medical </h2>
              <p class="text-gray-500"> 082373 32433</p>
              <p>Ratnagiri</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Generic+Medical/@16.8507556,74.5848416,14z/data=!4m9!1m2!2m1!1sgeneric+medicine+store+sanlgli+!3m5!1s0x3bc119ab229d0f11:0xe8d0c0a21
          ac441c3!8m2!3d16.8505644!4d74.5822609!15sCh1nZW5lcmljIG1lZGljaW5lIHN0b3JlIHNhbmdsaZIBFG1lZGljYWxfc3VwcGx5X3N0b3Jl">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="genericmedsangli.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Generic Medicine Store
              </h2>
              <p class="text-gray-500"> 0233 221 2345</p>
              <p>Sangli</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/SHREE+SAMARTHA+SWAST+AUSHADHI+SEVA/@16.8458949,74.58434,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc1187c185f3cad:0xddf477e20818ca57!8m2!3d16.8458613!4d74.5865331">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="shrisammed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">SHREE SAMARTHA SWAST AUSHADHI SEVA
              </h2>
              <p class="text-gray-500"> 097660 48910</p>
              <p>Sangli</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://www.google.com/maps/place/Jan+Aushadhi+Store/@16.8518691,74.5812729,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc1187a9a7b6313:0x5a38b63063eb4b1f!8m2!3d16.851879!4d74.5834383">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="janaushsangli.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Jan Aushadhi Store</h2>
              <p class="text-gray-500"> 096042 42322</p>
              <p>Sangli</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full"> 
          <a href="https://www.google.com/maps/place/SHREE+SAMARTHA+SWAST+AUSHADHI+SEVA/@16.8518689,74.5746799,15z/data=!4m9!1m2!2m1!1sshree+generic+medical+store+swastha+aushadhi+seva++satara!3m5!1s0x3bc1187c185f3cad:0xddf477e20818ca57!8m2!3d16.8458613!4d74.5865331!15sCjlzaHJlZSBnZW5lcmljIG1lZGljYWwgc3RvcmUgc3dhc3RoYSBhd
          XNoYWRoaSBzZXZhICBzYXRhcmFaOiI4c2hyZWUgZ2VuZXJpYyBtZWRpY2FsIHN0b3JlIHN3YXN0aGEgYXVzaGFkaGkgc2V2YSBzYXRhcmGSAQlkcnVnc3RvcmU">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="shrivitmed.jfif">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Shree Generic Medical Store Swashta Aushadhi Seva</h2>
              <p class="text-gray-500"> 086005 41268</p>
              <p>Satara</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/NZt2fUZ381hTeic88">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="shanmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">SHANTAI SWAST AUSHADHI SEVA</h2>
              <p class="text-gray-500"> 097306 85060</p>
              <p>Satara</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/Y1ntWyz1P9XzZeeT6">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="rajhansmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">RAJHANS SWAST AUSHADHI SEVA GENERIC MEDCINE STORE
              </h2>
              <p class="text-gray-500"> 090280 94888</p>
              <p>Satara</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/pSzctno33vbqebGp6">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="swastamed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Shree bhumika medicals</h2>
              <p class="text-gray-500"> 08237637106</p>
              <p>Sindhudurg</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/V6WaH3cAnguLK5xR9">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="panmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Panhalkar medical</h2>
              <p class="text-gray-500"> 09503970999</p>
              <p>Sindhudurg</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/1gGhLe9drs6GJsKPA">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="genrimed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Suman Generic Medical</h2>
              <p class="text-gray-500"> 09922642859</p>
              <p>Sindhudurg</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://g.page/wellness-forever-solapur?share">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="wellmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Well Ness forever</h2>
              <p class="text-gray-500"> 02172315558</p>
              <p>Solapur</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/6sfZfU5UiN9uzKhY6">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="janmedsol.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Jan Aushadhi Store</h2>
              <p class="text-gray-500"> 099603 85320</p>
              <p>Solapur</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://g.page/rahul-medical-davaindia-generic?share">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="davaindmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Rahul Medical DavaIndia Generic Pharmacy</h2>
              <p class="text-gray-500"> 090211 23912</p>
              <p>Solapur</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/Ryu5vyS1L5dHcNpZA">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="swastamed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Jupiter pharmacy</h2>
              <p class="text-gray-500"> 02221725556</p>
              <p>Thane</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/PwFLRFrCdSMcwKka6">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="genericomed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Generico Generic Medicine Pharmacy</h2>
              <p class="text-gray-500"> 093263 96947</p>
              <p>Thane</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/HSSpJEHBM3wsegXq9">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="arogyamedthane.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Aarogyam Swast Aushadhi Kendra Generic Medicine Store</h2>
              <p class="text-gray-500"> 09869225644</p>
              <p>Thane</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/Z2mqzEk2ZtkfwuMF8">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="laxmimed.jfif">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Laxmi Generic Medical Store</h2>
              <p class="text-gray-500"> 094221 43751</p>
              <p>Wardha</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/gdR115KEH8d6f3c87">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="janmed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Jan Aushadhi Store</h2>
              <p class="text-gray-500"> 097654 04046</p>
              <p>Wardha</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/DH86FvMw5bqaLbm26">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="janaushadhikendra.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">SEWAGRAM JANSUVIDHA SWAST MEDICAL SHOP</h2>
              <p class="text-gray-500"> 089992 24129</p>
              <p>Wardha</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/o9zCYaCKcossF4Bu6">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="vanmed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Vanjani Medical</h2>
              <p class="text-gray-500"> 08087217413</p>
              <p>Washim</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/Xupfr86CWiMWSaEu7">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="herzenmed.jfif">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Herzen Health Care</h2>
              <p class="text-gray-500"> 07719935582</p>
              <p>Washim</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/fLQg4RDagPp4YRh47">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="maulimedwashim.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Mauli Medical General Store</h2>
              <p class="text-gray-500"> 07252234233</p>
              <p>Washim</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/3DmHZZx876pJudVM9">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="ushaimed.webp">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Ushai Generic Medical Stores
              </h2>
              <p class="text-gray-500">086989 45474</p>
              <p>Yavatmal</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/E2BiZ57nGHTymokX7">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="genericart.jfif">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Sanjeevan Medical</h2>
              <p class="text-gray-500"> 07232244278</p>
              <p>Yavatmal</p>
            </div>
          </a>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="https://goo.gl/maps/oUzmNwDX4HTye6CP8">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
              src="janmed.jpg">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium">Shree Sailaxmi Medical Store</h2>
              <p class="text-gray-500"> 09869225644</p>
              <p>Yavatmal</p>
            </div>
          </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>