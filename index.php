<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>News Map</title>
    <link rel="icon" type="image/gif/png" href="assets/marker/UkPotM-logo.jpg">
    <link href='//fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel='stylesheet' href = "/assets/js/jQRangeSlider-5.7.2/css/iThing-min.css">
   
    <style>
        body
        {
          background-color:#2C2D32;
        }
        
        h1
        {
            font-family: 'Aclonica';
            font-size: 40px;
            margin-top: 2rem;
            margin-bottom: 2rem;
            margin-left: 2rem;
        }
        
        .checkboxs
        {
            font-family: 'Aclonica', sans-serif;;
            font-size: 20px;
            margin-top: 20px;
            margin-bottom:20px;
        }
        
        h3
        {
            font-family: 'Open Sans Condensed', sans-serif;;
            font-size: 20px;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
        
        input[type=checkbox] 
        {
          width:30px; height:30px;
        }
        input[type=checkbox][disabled]
        {
          border-color: #eee;
          color: #ccc;
         background: linear-gradient(to top, #e6e6e6 0px, #fff 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
        }
        
        #imaginary_container{
            margin-top:23px; /* Don't copy this */
            margin-right:60px;
        }
        .mybutton_style
        {
            background:none;
            border:none;
            box-shadow:none;
            margin-left:1rem;
            margin-right:0.5rem;
        }
        
    </style>
  </head>
  <body>
    
    
    
   
    	<div class="row">
    	  <!--Head Section-->
    	  <div class="col-sm-3">
          <div id="headerbar">
              <h1> <img src = "assets/marker/UkPotM-logo.jpg" style="width:55px;height:55px;"></img><font color="#F1F2F8"> NEWS MAP</font></h1>
          </div>
        </div>
        <!--End head Section-->
        <!--Search Section-->
          <div class="col-sm-2">
              <div id="imaginary_container"> 
                  <div class="input-group stylish-input-group">
                      <input type="text" class="form-control" id="search" onkeyup="place_marker()" placeholder="Search by keyword" >
                        <span class="input-group-addon">
                            <button type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>  
                        </span>
                  </div>
              </div>
          </div>
          <!--End search Section-->
    	</div>
    
    
    
    
    
    <!--CheckBox +Slider bar Section-->
    <div class="row">
      <div class="col-sm-6">
        <div class="checkboxs">
          <form>
            <!--Society-->
            <div class="btn-group mybutton_style">
             <button class = "mybutton_style" data-toggle="dropdown" style = "color :#99ccff"><img src="/assets/marker/society.png"  width="40" height="40">Society<span class="caret"></span></button>
                <ul class="dropdown-menu" style = "background:linear-gradient(#99c2ff, #ccf5ff);margin-left:20%" >
                  <li><input type="checkbox" id="politic" checked onchange="place_marker()"/>All</li>  
                  <li><input type="checkbox" id="polHome" checked onchange="checkdisable('society')"/>Politics home</li>
                  <li><input type="checkbox" id="polWT" checked onchange="checkdisable('society')">Women Today</li>
                  <li><input type="checkbox" id="polEdu" checked onchange="checkdisable('society')">Education</li>
                  <li><input type="checkbox" id="polDef" checked onchange="checkdisable('society')">Defence</li>
                  <li><input type="checkbox" id="polJud" checked onchange="checkdisable('society')">Judiciary</li>
                </ul>
            </div>
          
            <!--Finance-->
            <div class="btn-group mybutton_style">
             <button class = "mybutton_style" data-toggle="dropdown" style = "color :#ffcccc"><img src="/assets/marker/finance.png"  width="40" height="40">Finance<span class="caret"></span></button>
                <ul class="dropdown-menu" style = "background:linear-gradient(#ffad99, #ffcccc);margin-left:20%" >
                  <li><input type="checkbox" id="finance" checked onchange="place_marker()"/>All</li>  
                  <li><input type="checkbox" id="finMark" checked onchange="checkdisable('fin')"/>markets</li>
                  <li><input type="checkbox" id="finBL" checked onchange="checkdisable('fin')">Biz Leaders</li>
                </ul>
            </div>
            <!--Science-->
            <div class="btn-group mybutton_style">
             <button class = "mybutton_style" data-toggle="dropdown" style = "color :#eedef9"><img src="/assets/marker/science.png"  width="40" height="40">Science<span class="caret"></span></button>
                <ul class="dropdown-menu" style = "background:linear-gradient(#e0ccff, #ffe6f0);margin-left:20%" >
                  <li><input type="checkbox" id="science" checked onchange="place_marker()"/>All</li>  
                  <li><input type="checkbox" id="sciTech" checked onchange="checkdisable('sci')"/>tech.</li>
                  <li><input type="checkbox" id="sciEnv" checked onchange="checkdisable('sci')">Environment</li>
                  <li><input type="checkbox" id="sciSpa" checked onchange="checkdisable('sci')">Space</li>
                  <li><input type="checkbox" id="sciHea" checked onchange="checkdisable('sci')">Health</li>
                </ul>
            </div>
            <!--sport-->
             <div class="btn-group mybutton_style">
             <button class = "mybutton_style" data-toggle="dropdown" style = "color :#ccff99"><img src="/assets/marker/sport.png"  width="40" height="40">Sport<span class="caret"></span></button>
                <ul class="dropdown-menu" style = "background:linear-gradient(#eeffe6, #f7ffe6);margin-left:20%" >
                  
                  <li><input type="checkbox" id="sport" checked onchange="place_marker()"/>All</li>  
                  <li><input type="checkbox" id="sportBase" checked onchange="checkdisable('sport')"/>Baseball</li>
                  <li><input type="checkbox" id="sportNFL" checked onchange="checkdisable('sport')">N.F.L</li>
                  <li><input type="checkbox" id="sportCF" checked onchange="checkdisable('sport')">Coll. Football</li>
                  <li><input type="checkbox" id="sportNBA" checked onchange="checkdisable('sport')">N.B.A</li>
                  <li><input type="checkbox" id="sportCB" checked onchange="checkdisable('sport')">Coll. Basketball</li>
                  <li><input type="checkbox" id="sportH" checked onchange="checkdisable('sport')">Hockey</li>
                  <li><input type="checkbox" id="sportSoc" checked onchange="checkdisable('sport')">Soccer</li>
                  <li><input type="checkbox" id="sportGolf" checked onchange="checkdisable('sport')">Golf</li>
                </ul>
            </div>
            <!--Entertainment-->
            <div class="btn-group mybutton_style">
             <button class = "mybutton_style" data-toggle="dropdown" style = "color :#ffb266"><img src="/assets/marker/enter.png"  width="40" height="40">Entertainment<span class="caret"></span></button>
                <ul class="dropdown-menu" style = "background:linear-gradient(#ffe5e5, #fff9e5);margin-left:30%" >
                  <li><input type="checkbox" id="entertainment" checked onchange="place_marker()"/>All</li>  
                  <li><input type="checkbox" id="EnterCN" checked onchange="checkdisable('enter')"/>Celebrity News</li>
                  <li><input type="checkbox" id="EnterMovie" checked onchange="checkdisable('enter')">Movies</li>
                  <li><input type="checkbox" id="EnterMusic" checked onchange="checkdisable('enter')">Music</li>
                  <li><input type="checkbox" id="EnterStyle" checked onchange="checkdisable('enter')">Style</li>
                </ul>
            </div>
            <!--travel-->
            <div class="btn-group mybutton_style">
             <button class = "mybutton_style" data-toggle="dropdown" style = "color :#ff99cc"><img src="/assets/marker/travel.png"  width="40" height="40">Travel<span class="caret"></span></button>
                <ul class="dropdown-menu" style = "background:linear-gradient(#ffcce0, #ffe5e5);" >
                  <li><input type="checkbox" id="travel" checked onchange="place_marker()"/>All</li>  
                  <li><input type="checkbox" id="Travelfamily" checked onchange="checkdisable('tra')"/>Family Travel</li>
                  <li><input type="checkbox" id="Traveltheme" checked onchange="checkdisable('tra')">Theme Parks</li>
                  <li><input type="checkbox" id="Travelbeaches" checked onchange="checkdisable('tra')">Beaches</li>
                  <li><input type="checkbox" id="Traveldisney" checked onchange="checkdisable('tra')">Disney</li>
                </ul>
            </div>
          </form>
        </div>
      </div>
      <div class="col-sm-6">
        <div id="slider" style="float: right; width:90%; margin-right:30px; padding-top:20px; padding-bottom:20px"></div>
      </div>
    </div>
    <!--End checkbox and slider bar Section-->
    
    <!-- Map+Javascript Section -->
    <div id="googleMap" style="width:100%;height:1000px;"></div>
    
    <!-- JQuery for slider bar(4)-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/assets/js/jQRangeSlider-5.7.2/jQDateRangeSlider-min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    
    <script>
      /*
      *   The function below will create a new instance of a XMLHttpRequest 
      *   and load asynchronously the contents of my_data.json. 
      *   I have gone with asynchronous but you can change the argument to false 
      *   if you want a synchronous load. Thankfully all modern browsers support the native JSON.parse method.
      */
      var file = "news.json";
      function loadJSON(file, callback) 
      {
        var xobj = new XMLHttpRequest();
        xobj.overrideMimeType("application/json");
        xobj.open('GET', file, true);
        xobj.onreadystatechange = function() 
        {
            if (xobj.readyState == 4 && xobj.status == "200") 
            {
              callback(xobj.responseText);
            }
        }
        xobj.send(null);
      }
    
      //Set Date range bar
      var min_month =0;
      var min_date =0;
      var min_year =0;
      var max_month = 12;
      var max_date = 31;
      var max_year = 2017;
     //month hashmap
      var monthmap = {
        "Jan": 1,
        "Feb": 2,
        "Mar": 3,
        "Apr": 4,
        "May": 5,
        "Jun": 6,
        "Jul": 7,
        "Aug": 8,
        "Sept": 9,
        "Oct": 10,
        "Nov": 11,
        "Dec": 12
      };
      
      var mapProp;
      var map;
      var markers = [];
      
      // create google map
      function myMap() 
      {
        //Define the google map
        mapProp= {
          center:new google.maps.LatLng(30.508742,-97.120850),//latitude and longitude 
          zoom:5,
          //mapTypeId:google.maps.MapTypeId.HYBRID 
        };
        map=new google.maps.Map(document.getElementById("googleMap"),mapProp);  
        place_marker();
        map.data.loadGeoJson('https://storage.googleapis.com/mapsdevsite/json/states.js', { idPropertyName: 'STATE' });
	      map.data.setStyle({
		      fillOpacity: 0,
		      strokeWeight: 0
	      });
	      map.data.addListener('mouseover', function(event){
		    map.data.revertStyle();
		    map.data.overrideStyle(event.feature,{strokeWeight: 0.5, fillOpacity: 0.1});
	       });
	      map.data.addListener('mouseout',function(event){
		    map.data.revertStyle();
	      });
	      
	     // map.data.loadGeoJson('http://api.gdeltproject.org/api/v1/gkg_geojson?QUERY=geoname:Texas');
	      $.getJSON('http://api.gdeltproject.org/api/v1/gkg_geojson?QUERY=geoname:Texas', function(data){
	        console.log("it worked");
	      })
	      /*loadJSON('api.gdeltproject.org/api/v1/gkg_geojson?QUERY=geoname:Texas', function(response) {
	          console.log("it worked");
	      });*/
      }
      
      //Delete all the markers on the map
      function deleteMarkers() 
      {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(null);
        }
        markers = [];
      }
      
      
      
      function checkdisable(category)
      {
        if(category == 'tra')
        {
          var tf = document.getElementById("Travelfamily").checked;
          var tt = document.getElementById("Traveltheme").checked;
          var tb = document.getElementById("Travelbeaches").checked;
          var td = document.getElementById("Traveldisney").checked;
          if(tf==true||tt==true||tb==true||td ==true)
          {
            document.getElementById("travel").checked = false;
           
          }
        }
        if(category == 'enter')
        {
          var ec = document.getElementById("EnterCN").checked;
          var em = document.getElementById("EnterMovie").checked;
          var emu = document.getElementById("EnterMusic").checked;
          var es = document.getElementById("EnterStyle").checked;
          if(ec==true||em==true||emu==true||es ==true)
          {
            document.getElementById("entertainment").checked = false;
          }
        }
        if(category == 'sport')
        {
          var sb = document.getElementById("sportBase").checked;
          var snlf = document.getElementById("sportNFL").checked;
          var scf= document.getElementById("sportCF").checked;
          var snba = document.getElementById("sportNBA").checked;
          var scb = document.getElementById("sportCB").checked;
          var sh = document.getElementById("sportH").checked;
          var ssoc = document.getElementById("sportSoc").checked;
          var sg = document.getElementById("sportGolf").checked;
          if(sb==true||snlf==true||scf==true||snba ==true||scb==true||sh==true||ssoc==true||sg ==true)
          {
            document.getElementById("sport").checked = false;
          }
        }
        if(category == 'sci')
        {
          var st = document.getElementById("sciTech").checked;
          var se = document.getElementById("sciEnv").checked;
          var ss= document.getElementById("sciSpa").checked;
          var sh = document.getElementById("sciHea").checked;
        
          if(st==true||se==true||ss==true||sh ==true)
          {
            document.getElementById("science").checked = false;
          }
        }
        if(category == 'fin')
        {
          var fm = document.getElementById("finMark").checked;
          var fbl = document.getElementById("finBL").checked;
          if(fm==true||fbl==true)
          {
            document.getElementById("finance").checked = false;
          }
        }
        if(category == 'society')
        {
          var ph = document.getElementById("polHome").checked;
          var pwt = document.getElementById("polWT").checked;
          var pe = document.getElementById("polEdu").checked;
          var pd = document.getElementById("polDef").checked;
          var pj = document.getElementById("polJud").checked;
          if(ph==true||pwt==true||pe==true ||pd==true||pj==true)
          {
            document.getElementById("politic").checked = false;
          }
        }
        place_marker();
      }
      
      function place_marker()
      {
        deleteMarkers();
        markers = [];
      
        //Define markers
        var pol = '/assets/marker/marker_blue.png';
        var sport = '/assets/marker/marker_green.png';
        var sci = '/assets/marker/marker_purple.png';
        var enter = '/assets/marker/marker_orange.png';
        var finna = '/assets/marker/marker_red.png';
        var tra = '/assets/marker/marker_pink.png';
        
        //Check checkbox on the top
        var ck_pol = document.getElementById("politic");
        var ck_sport = document.getElementById("sport");
        var ck_sci = document.getElementById("science");
        var ck_enter = document.getElementById("entertainment");
        var ck_finna = document.getElementById("finance");
        var ck_travel =  document.getElementById("travel");
        //Read JSON file
        loadJSON("data0.json",function(response)
        {
          console.log("it worked");
          var eventData= JSON.parse(response);
          console.log(eventData.eventDate);
          console.log(eventData.location.lat, eventData.location.long); //lat and long of event
        });
        loadJSON(file, function(response) 
        {
          var jsonresponse = JSON.parse(response);
          for(var i = 0; i<jsonresponse.length;i++)//Iteration over all news elements
          {
            //check whether the date is in the range
            var cur_date = jsonresponse[i].time.toString().split('/');
            var cur_month = monthmap[cur_date[0]];
            var cur_date = cur_date[1];
            var cur_year = cur_date[2];
            var datavalid = checkdate(cur_month,cur_date,cur_year);
            if(datavalid == false) continue;
            
            //check search bar 
            var input = document.getElementById("search");
            if(input!="")
            {
              var target = input.value.toUpperCase();
              var titlestring = jsonresponse[i].title.toUpperCase();
              if(titlestring.indexOf(target) <= -1)
                continue;
            }
            
            //check icon
            var cur_icon;
           
            if(jsonresponse[i].icon == "pol" && ck_pol.checked == true)
              cur_icon = pol;
            else if(jsonresponse[i].tag == "polhome" && document.getElementById("polHome").checked == true)
              cur_icon = pol;
            else if(jsonresponse[i].tag == "wt" && document.getElementById("polWT").checked == true)
              cur_icon = pol;
            else if(jsonresponse[i].tag == "edu" && document.getElementById("polEdu").checked == true)
              cur_icon = pol;
            else if(jsonresponse[i].tag == "def" && document.getElementById("polDef").checked == true)
              cur_icon = pol;
            else if(jsonresponse[i].tag == "jud" && document.getElementById("polJud").checked == true)
              cur_icon = pol;
            else if(jsonresponse[i].icon == "finna" && ck_finna.checked == true)
              cur_icon = finna;
            else if(jsonresponse[i].tag == "market" && document.getElementById("finMark").checked == true)
              cur_icon = finna;
            else if(jsonresponse[i].tag == "bizleader" && document.getElementById("finBL").checked == true)
              cur_icon = finna;
            else if(jsonresponse[i].icon == "sci" && ck_sci.checked == true)
              cur_icon = sci;
            else if(jsonresponse[i].tag == "tech" && document.getElementById("sciTech").checked == true)
              cur_icon = sci;
            else if(jsonresponse[i].tag == "env" && document.getElementById("sciEnv").checked == true)
              cur_icon = sci;
            else if(jsonresponse[i].tag == "spa" && document.getElementById("sciSpa").checked == true)
              cur_icon = sci;
            else if(jsonresponse[i].tag == "hea" && document.getElementById("sciHea").checked == true)
              cur_icon = sci;
            else if(jsonresponse[i].icon == "enter" && ck_enter.checked == true)
              cur_icon = enter;
            else if(jsonresponse[i].tag == "cn" && document.getElementById("EnterCN").checked == true)
              cur_icon = enter;
            else if(jsonresponse[i].tag == "movie" && document.getElementById("EnterMovie").checked == true)
              cur_icon = enter;
            else if(jsonresponse[i].tag == "music" && document.getElementById("EnterMusic").checked == true)
              cur_icon = enter;
            else if(jsonresponse[i].tag == "style" && document.getElementById("EnterStyle").checked == true)
              cur_icon = enter;
            else if(jsonresponse[i].icon == "sport" && ck_sport.checked == true)
              cur_icon = sport;
            else if(jsonresponse[i].tag == "baseball" && document.getElementById("sportBase").checked == true)
              cur_icon = sport;
            else if(jsonresponse[i].tag == "nfl" && document.getElementById("sportNFL").checked == true)
              cur_icon = sport;
            else if(jsonresponse[i].tag == "cf" && document.getElementById("sportCF").checked == true)
              cur_icon = sport;
            else if(jsonresponse[i].tag == "nba" && document.getElementById("sportNBA").checked == true)
              cur_icon = sport;
            else if(jsonresponse[i].tag == "h" && document.getElementById("sportCB").checked == true)
              cur_icon = sport;
            else if(jsonresponse[i].tag == "soc" && document.getElementById("sportH").checked == true)
              cur_icon = sport;
            else if(jsonresponse[i].tag == "golf" && document.getElementById("sportSoc").checked == true)
              cur_icon = sport;
            else if(jsonresponse[i].tag == "golf" && document.getElementById("sportGolf").checked == true)
              cur_icon = sport;
            else if(jsonresponse[i].icon == "tra" && ck_travel.checked == true )
              cur_icon = tra;
            else if(jsonresponse[i].tag == "family" &&  document.getElementById("Travelfamily").checked == true)
              cur_icon = tra;
            else if(jsonresponse[i].tag == "theme" &&  document.getElementById("Traveltheme").checked == true)
              cur_icon = tra;
            else if(jsonresponse[i].tag == "beach" && document.getElementById("Travelbeaches").checked == true)
              cur_icon = tra;
            else if(jsonresponse[i].tag == "disney"&& document.getElementById("Traveldisney").checked == true)
              
              cur_icon = tra;
               
             
            else 
              continue;
              
            //Set Markers
            var myCenter = new google.maps.LatLng(jsonresponse[i].pointx,jsonresponse[i].pointy);
            var marker = new google.maps.Marker({
              position: myCenter,
              map: map,
              icon: cur_icon
            });
           
            //info window
            var infowindow = new google.maps.InfoWindow({ maxWidth: 300 });
            var contentString = 
              '<div id="content">'+
                '<h3 id="firstHeading">'+jsonresponse[i].title+'</h3>'+
                '<div id="bodyContent">'+
                  '<p>'+jsonresponse[i].text+'</p>';
                  if(jsonresponse[i].video!="")
                  {
                     contentString +='<p><iframe style = "max-width:100%" src='+jsonresponse[i].video+' frameborder="0" allowfullscreen></iframe></p>'
                  }
                  contentString +=
                  '<p><img style = "max-width:100%"  src=' + jsonresponse[i].img+'></img></p>'+
                  '<p>Fox News: <a href='+jsonresponse[i].link1+'>'+
                      jsonresponse[i].link1+'</a>'+
                  '</p>'+
                  '<p>New York times: <a href='+jsonresponse[i].link2+'>'+
                      jsonresponse[i].link2+
                  '</p>'+
                '</div>'+
              '</div>';
            marker.html = contentString;
            google.maps.event.addListener( marker, 'click', function() 
            {
              infowindow.setContent(this.html);
              infowindow.open(map, this);
            });
            
            
            markers.push(marker);
          }//End for
        });//End loadJSONfile
        
        //Set markers
        for (var i = 0; i < markers.length; i++) 
          markers[i].setMap(map);
          
      }//End MAP
      
      
      //initialize slider bar first
      $("#slider").dateRangeSlider(
        {
          bounds:
          {
            min: new Date(2016, 12, 1),
            max: new Date(2017, 11, 30)
          },
          defaultValues: 
          {
            min: new Date(2017, 1, 1),
            max: new Date(2017, 10, 30)
          }
        }
      );
      var dateValues =$("#slider").dateRangeSlider("values");//after initialization, get values   
      $("#slider").bind("valuesChanged", function(e, data)//changing
      {
        var min_date = data.values.min.toString().split(' ');
        min_month = min_date[1];
        min_date = min_date[2];
        min_year = min_date[3];
        var max_date =data.values.max.toString().split(' ');
        max_month = max_date[1];
        max_date = max_date[2];
        max_year = max_date[3];
        place_marker();
      });
  
      //Check date within range or not
      function checkdate(cur_month,cur_date,cur_year)
      {
        if(cur_year<min_year || cur_year>max_year)
          return false;
        if(cur_month < monthmap[min_month] || cur_month>monthmap[max_month])
          return false;
          
        return true;
      }
      
      </script>
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDY3Kw63ydQg2_hNuSyjfPwK2QJ7RYoHMo&callback=myMap"></script>








</body>
</html>