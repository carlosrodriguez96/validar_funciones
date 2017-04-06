/**
* Desarrollado por:
* Carlos Arturo rodriguez
* 
*/
var acumuladorApp = angular.module( 'acumuladorApp', [] );        
        acumuladorApp.controller( "acumuladorAppCtrl",           
            [ "$scope", "$http",
            function( $scope, $http )
            {
                $scope.cargar_datos_php=function()					                      
                {          //console.log($scope.lista.length);
		            		
		            		var funcion=$scope.lista;
		            		

		            		
		            		{
		            			
                                                
		            			$http.get('detectar_si_existe_mysqli.php?funcion=' + funcion)
    							.then(
    								
    								function (response) 
    									{
    										
    										$scope.campos = response.data.records;
    									}
									);
		            			 
		                              
		            		}             
                    }            
                    	
       			}		
              ]
         );        	
