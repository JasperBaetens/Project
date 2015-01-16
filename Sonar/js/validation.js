

         var latitude = document.getElementById("lat");
         var longitude = document.getElementById("long");
         var range = document.getElementById('range');

         var validator = document.getElementById('validator');
                    
                function checkValue() {
                     
                    var latVal = latitude.value;
                    var longVal = longitude.value;
                    var rangeVal = range.value;
                   
                    
                        if(isNaN(latVal)){
                            //alert('latitude must be numeric!')
                            latitude.value = '';
                            validator.innerHTML="latitude must be numeric!"
                        }
                        
                    
                    
                        else if(isNaN(longVal)){
                            //alert('longitude must be numeric!')
                            longitude.value = '';
                            validator.innerHTML="longitude must be numeric!"
                        }  
                    
                    
                        else if(isNaN(rangeVal)){
                            //alert('range must be numeric!')
                            range.value = '';
                            validator.innerHTML="range must be numeric!"
                        } 
                        else{
                            validator.innerHTML="";
                        }
                    
                    
                }
            latitude.onchange = checkValue;  
            longitude.onchange = checkValue;
            range.onchange = checkValue;