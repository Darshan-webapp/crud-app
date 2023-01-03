function validate() {
    var productName = document.getElementById('productName').value;
    //IF runs only when error is occurred 
    if(!productName.length > 0) {
        document.getElementById('errMsgProductName').innerHTML = 'Please enter the product name';
        document.getElementById('productName').focus();
        return;
    }
    else {
        document.getElementById('errMsgProductName').innerHTML = '';
    }
    
    var price = document.getElementById('price').value;
    if(price <=0 || price >10000 ){
        document.getElementById('errMsgPrice').innerHTML = 'price must be between 1-10000.';
        document.getElementById('price').focus();
        return;
        
    }
    else {
        document.getElementById('errMsgPrice').innerHTML = '';
    }
    
    var qty = document.getElementById('qty').value;
    if(qty <=0 || qty >10){
        console.log('quantity must be between 1-10.')
        document.getElementById('errMsgQty').innerHTML = 'quantity must be between 1-10.';
        document.getElementById('qty').focus();
        return;    
    }
    
    else {
        document.getElementById('errMsgQty').innerHTML = '';
    }

    document.getElementById('form').submit();
    
    
    
}

document.getElementById('save').addEventListener('click', validate);