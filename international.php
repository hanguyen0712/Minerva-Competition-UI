<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
          
          #app{
            border:1px solid #ededed;
            padding:30px;
            border-radius:7px;
          }
          
          .one_item{
            background:#F8F8F8;
            border:1px solid #e0e0e0;
            border-radius:7px;
            padding:20px 20px;
            margin-bottom:20px;
          }

          .search {
            width: 100%;
            position: relative;
          }

          .searchTerm {
        float: left;
        width: 100%;
        border: 3px solid #f15c28;
        padding: 5px;
        height: 20px;
        border-radius: 5px;
        outline: none;
        color: #9DBFAF;
      }

      .searchTerm:focus{
        color: #00B4CC;
      }

      .searchButton {
        position: absolute;  
        right: -80px;
        width: 70px;
        height: 36px;
        border: 1px solid #f15c28;
        background: #f15c28;
        text-align: center;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        font-size: 10px;
      }

      /*Resize the wrap to see the search bar change!*/
      .searchWrap{
        width: 30%;
        position: absolute;
        top: 5%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
          
          h1{
            font-family:'Roboto', sans-serif;
            font-size:16.5pt;
            color:#f15c28;
            margin-bottom:20px;
          }
          
          h2{
            font-family:'Roboto', sans-serif;
            font-size:13.5pt;
            color:#999999;
            margin-bottom:6px;
          }
          
          h3 a{
            font-family:'Roboto', sans-serif;
            font-size:12.5pt;
            color:#3f3f3f;
            margin-bottom:12px;
            font-weight:bolder;
            text-decoration:none;
          }
          
          .title{
            font-family:'Roboto', sans-serif;
            font-size:14.5pt;
            color:#303030;
            margin-left:10px;
            font-weight:600;
          }
          
          p{
            font-family:'Roboto', sans-serif;
            font-size:9pt;
            color:#303030;
            line-height:120%;
          }
          
          .important_info{
            font-size:11pt !important;
            line-height:200% !important;
          }
          
          .bold{
            font-weight:600; 
          }
          
          .newButton {
        position: relative;  
        right: 0px;
        width: 50px;
        height: 10px;
        border: 1px solid #f15c28;
        background: #f15c28;
        text-align: center;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        font-size: 15px;
        padding: 10px;
      }
      
        </style>

      
    </head>
    <body>
      
      <div id="app">
        
            <h3 style="margin-top:0px;"><a href="start.php">< GO BACK</a></h3>
            
            <!--Search bar-->
            <div class="searchWrap">
                <div class="search">
                  <form action="search.php">
                    <input name="searchWord" type="text" class="searchTerm" id="searchWordId" placeholder="What are you looking for?">
                    <input type="submit" class="searchButton">
                  </form>
               </div>
            </div>

            <center><a class="newButton" href="https://airtable.com/shre7IpyuQklZbTOX" target="_blank">Suggest New Competitions</a>
            <a class="newButton" href="https://airtable.com/shrI7h3Ynx04LG7YI" target="_blank">Suggest A Modification</a></center>
            

            <h1 style="margin-top:0px;" id="demo">International</h1>
            
              
                <div v-for="item in items" class="one_item">
                  
                  <p class="title">{{ item['fields']['Competition'] }}</p>
                  
                  <table>
                    
                    <tr>
                    
                      <td width="23px;">
                      
                        <center><img src="pool.png" width="23px"/></center>
                      
                      </td>
                      
                      <td>
                      
                        <p class="important_info" style=""><span class="bold">Selection Pool:</span> {{ item['fields']['Selection Pool'] }}</p>
                      
                      </td>
                      
                    </tr>
                    
                    <tr>
                    
                      <td width="23px;">
                      
                        <center><img src="globe.png" width="23px"/></center>
                      
                      </td>
                      
                      <td>
                      
                        <p class="important_info"><span class="bold">Area:</span> {{ item['fields']['Area'] }}</p>
                      
                      </td>
                      
                    </tr>
                    
                    <tr>
                    
                      <td width="23px;">
                      
                        <center><img src="location.png" width="23px"/></center>
                      
                      </td>
                      
                      <td>
                      
                        <p class="important_info"><span class="bold">Country:</span> {{ item['fields']['Country'] }}</p>
                      
                      </td>
                      
                    </tr>
                    
                    <tr>
                    
                      <td width="23px;">
                      
                        <center><img src="theme.png" width="23px"/></center>
                      
                      </td>
                      
                      <td>
                      
                        <p class="important_info"><span class="bold">Theme:</span> {{ item['fields']['Theme'] }}</p>
                      
                      </td>
                      
                    </tr>
                    
                    <tr>
                    
                      <td width="23px;">
                      
                        <center><img src="category.png" width="23px"/></center>
                      
                      </td>
                      
                      <td>
                      
                        <p class="important_info"><span class="bold">Category:</span> {{ item['fields']['Category'] }}</p>
                      
                      </td>
                      
                    </tr>
                    
                  </table>

                </div>
      </div><!--app-->
        
        <!-- Include Dependancy Scripts -->
        <script type="text/javascript" src="https://unpkg.com/vue"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>
      
        <script type="text/javascript">
          $( "form" ).on( "submit", function( event ) {
      console.log( $( this ).serialize() );
    });
            var app = new Vue({
                el: '#app',
                data: {
                    items: []
                },
                mounted: function(){
                   this.loadItems(); 
                },
                methods: {

                  // Must include an offset so we can retrieve more than 100 entries (Airtable's default) at a time

                  getDataAxiosCall: function(app_id, app_key, offset) {
            return axios.get(
              "https://api.airtable.com/v0/appTEADS2Hjk8M0Hk/international?view=Grid%20view&offset="+ offset,
              /* change "fields" to the name of the new sheet */
              {
                headers: { Authorization: "Bearer " + app_key }
              }
            ).then(response => {
              console.dir(response.data);

              return {
                data: response.data.records,
                offset: response.data.offset,
              }
            }).catch(error => {
              console.log(error);
            });
          },
          getData: function(app_id, app_key, data, offset) {
            
            if (offset === undefined){

              return data;
            } else{
              return this.getDataAxiosCall(app_id, app_key, offset)
              .then(result => {
                
                data.push.apply(data,result["data"]);
                return this.getData(app_id, app_key, data, result["offset"]);
              })
            }
          },
                  
                    loadItems: function(){
                        console.log("loadItems");
                        // Init variables
                        var self = this
                        var app_id = "appTEADS2Hjk8M0Hk";
                        var app_key = "keyeKNRb1ObgZ24cX";
                        this.items = []; 
                       this.getData(app_id, app_key, [], "").then(result => {
              this.items = result;
              console.log(this.items.length);
            });
          
          }
                  
                },
              
                
              
            })
        </script>
      
    </body>
</html>