$(document).ready(function() {
  
  
  $("#btnExpenses").click(function(){

                                     
          $("#modalExpenseUp").children('.modal-dialog').addClass('modal-lg');   
          $('#modalExpenseUp').modal('show');
          $('#modalExpenseUp').appendTo("body");
          $('#addExpenses').show('0');
          $('#updateExpenses').hide('0');   

  });



 	$("#openCashier").click(function(){

                              var token = $("#openCashier").val();    
                              var base = $("#baseCashier").val(); 

                               if (base == "") {
			                          base = 0;
			                      }else{
			                    	  var base = base.replace(',', '');
			                          base = parseFloat(base); 
			                      }


                              $.post(
                                  '/manager/cashiers/open',
                                  {
                                      '_token':$('meta[name=csrf-token]').attr('content') ,
                                      'token':token,
                                      'base':base,
                                  }, 
                                  function(data){        
                                          $("#divNotifications").empty().html(data);  
                                          $('#modalOpenUp').modal('hide');
                                          load();                                        
                                          //$("#listCashiers").empty().html(data); 
                                          //$('#modalOrderUp').modal('hide');                                                     
                                  }
                              );

     });


 	  $("#closeCashier").click(function(){

                          var token = $("#tokenClosing").val();           
	                    	  var money =$("#moneyCashier").val();  
	                    	  var expense =$("#expenseCashier").val();   

	                    	  if (money == "") {
		                          money = 0;
		                      }else{
		                    	  var money = money.replace(',', '');
		                          var money = parseFloat(money);  
		                      }

		                        if (expense == "") {
		                          expense = 0;
		                      }else{
		                    	  var expense = expense.replace(',', '');
		                          var money = parseFloat(money);  
		                      }


                              $.post(
                                  '/manager/cashiers/close/'+token,
                                  {
                                      '_token':$('meta[name=csrf-token]').attr('content') ,
                                      'token':token,
                                      'money':money,
                                      'expense':expense,
                                  }, 
                                  function(data){        
                                          $("#divNotifications").empty().html(data);  
                                          $('#modalCloseUp').modal('hide');
                                          load();  
                                          clearCashiers();     

                                          var token = data.token;
                                                //var URLactual = window.location.hostname;
                                          var URLactual = window.location.origin;
                                                    //alert(URLactual);
                                          $("#btnPrint").attr("href", URLactual+"/manager/cashiers/prints/"+token);
                                                //$("#divNotifications").empty().html(data);                                                  
                                          $('#modalPaymentsUp').modal('hide'); 
                                          $('#modalPrintSmall').modal('show');     
                                          //load();                                        
                                          //$("#listCashiers").empty().html(data); 
                                          //$('#modalOrderUp').modal('hide');                                                     
                                  }
                              );

     });


     $("#btnPrint").click(function(){

                                                 
           $('#modalPrintSmall').modal('hide'); 

     });



    function clearCashiers() {
             
               //$("#divBarcode").find("input:hidden[name=scan]").val(""); 
                
                $("#moneyCashier").val(""); 
                $("#expenseCashier").val(""); 

              // $('input:hidden[input:hidden[name=scan]]').focus();
     }; 




    function load() {

              $.ajax({           
                  url:  '/manager/cashiers/load',
                  type: "GET",
                  datatype: "html",

              }).done(function(data){     
                 $("#listCashiers").empty().html(data);            
              })
              .fail(function(jqXHR, ajaxOptions, thrownError){
                  console.log('No response from server');
              });
    }; 


    	 $('.autonumeric').autoNumeric('init', { 
              mDec: 0 ,
              vMin: '0.00',
              vMax: '9999999999999.99'
          });



    	$("#moneyCashier").on('keyup', function(){

                      var cash  =  $("#cashCashier").val(); 
                      var expense =$("#expenseCashier").val();   
                      //moneyCashier

                      var money = $(this).val();   
                     
                      if (money == "") {
                          money = 0;
                      }else{
                    	     money = money.replace(',', '');
                           money = parseFloat(money);  
                      }


                       if (cash == "") {
                          cash = 0;
                      }else{
                    	  var cash = cash.replace('.', '');
                          cash = parseFloat(cash); 
                      }


                       if (expense == "") {
                          expense = 0;
                      }else{
                        var expense = expense.replace(',', '');
                          expense = parseFloat(expense); 
                      }

                      var uncash = parseFloat(money)-parseFloat(cash)+parseFloat(expense);
                       uncash = formatNumber.new(uncash);
                      $("#uncashCashier").text('$'+uncash);

                      //$("#returnSales").text('$'+returned);

     });


          $("#expenseCashier").on('keyup', function(){

                      var cash  =  $("#cashCashier").val(); 
                      var money =$("#moneyCashier").val();   

                     
                      var expense = $(this).val();   
                     
                      if (money == "") {
                          money = 0;
                      }else{
                           money = money.replace(',', '');
                           money = parseFloat(money);  
                      }


                       if (cash == "") {
                          cash = 0;
                      }else{
                        var cash = cash.replace('.', '');
                          cash = parseFloat(cash); 
                      }

                       if (expense == "") {
                          expense = 0;
                      }else{
                        var expense = expense.replace(',', '');
                          expense = parseFloat(expense); 
                      }
                      
                      var uncash = parseFloat(money)-parseFloat(cash)+parseFloat(expense);
                       uncash = formatNumber.new(uncash);
                      $("#uncashCashier").text('$'+uncash);

                      //$("#returnSales").text('$'+returned);

     });


      var formatNumber = {
                 separador: ".", // separador para los miles
                 sepDecimal: ',', // separador para los decimales
                 formatear:function (num){
                  num +='';
                  var splitStr = num.split('.');
                  var splitLeft = splitStr[0];
                  var splitRight = splitStr.length > 1 ? this.sepDecimal + splitStr[1] : '';
                  var regx = /(\d+)(\d{3})/;
                  while (regx.test(splitLeft)) {
                  splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
                  }
                  return this.simbol + splitLeft  +splitRight;
                 },
                 new:function(num, simbol){
                  this.simbol = simbol ||'';
                  return this.formatear(num);
                 }
      }

/*
      $("#expenseCashier").on('keyup', function(){

                      var cash  =  $("#cashCashier").val(); 
                      var money  =  $("#moneyCashier").val();  
                      //moneyCashier

                      var expense = $(this).val();    
                     
                     
                      if (money == "") {
                          money = 0;
                      }else{
                        var money = money.replace('.', ',');
                          var money = parseFloat(money);  
                      }

                       if (cash == "") {
                          cash = 0;
                      }else{
                        var cash = cash.replace('.', ',');
                          cash = parseFloat(cash); 
                      }


                       if (expense == "") {
                          expense = 0;
                      }else{
                        var expense = expense.replace('.', ',');
                          expense = parseFloat(expense); 
                      }


                      if (uncash == 0) {
                          uncash = 0;
                      }else{ 
                          uncash = cash-expense-money;
                      }

                      uncash = formatNumber.new(uncash);
                      $("#uncashCashier").text('$'+uncash);

                      //$("#returnSales").text('$'+returned);

     });*/


 

});
