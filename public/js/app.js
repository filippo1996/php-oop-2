let btn = document.querySelectorAll('button[data-cart]');
btn.forEach(ele => {
    ele.addEventListener('click', function(event){
        // funzione che aggiunge il prodotto nel carrello
        addCart(event.target);
    });
});

/**
 * funzione che aggiunge il prodotto nel carrello
 * @param {object} ele 
 */
async function addCart(ele){
    try{
        let id = ele.dataset.idProduct;
        let url = `http://localhost/corso-boolean-php/php-oop-2/app/Cart/add.php?add=${id}`;
        let response = await fetch(url);
        let status = await response.json();
        console.log(`${status.name}${status.message}`);
    } catch (error){
        console.log(error);
    }
    //let statusResp = await response.json;
    //console.log(nameProduct + ' aggiunto al carrello');
}