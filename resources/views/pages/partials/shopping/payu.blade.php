     
              <form method='post' action='https://sandbox.gateway.payulatam.com/ppp-web-gateway/' class="checkout-submit">
                     <input name='merchantId'    type='hidden'  value='{{ $payu->merchantId }}'   >
                     <input name='accountId'     type='hidden'  value='{{ $payu->accountId }}'  >
                     <input name='description'   type='hidden'  value='{{ $payu->description }}'   >
                     <input name='referenceCode' type='hidden'  value='{{ $payu->referenceCode }}'   >
                     <input name='amount'        type='hidden'  value='{{ $payu->amount }}'   >
                     <input name='tax'           type='hidden'  value='{{ $payu->tax }}'   >
                     <input name='taxReturnBase' type='hidden'  value='{{ $payu->taxReturnBase }}'   >
                     <input name='currency'      type='hidden'  value='{{ $payu->currency }}'  >
                     <input name='signature'     type='hidden'  value='{{ $payu->signature }}'   >
                     <input name='test'          type='hidden'  value='{{ $payu->test }}'   >
                     <input name='buyerEmail'    type='hidden'  value='{{ $payu->buyerEmail }}'   >              
                     <input name='responseUrl'    type='hidden'  value='{{ $payu->responseUrl }}'   >
                     <input name='confirmationUrl'    type='hidden'  value='{{ $payu->confirmationUrl }}'   >
                     <input name='Submit' id="addPayments" class="button-submit" type='submit'   value="Realice su orden ahora" >
              </form>
