let products = [];
let totalQuantity=0;
let subTotal =0 
function addChart () 
{
    let itemName = document.querySelector("#itemName").value;
    let price = Number(document.querySelector("#price").value);
    let quantity = Number(document.querySelector("#quantity").value);

    // prompt(itemName)

    if (itemName=="" || price<=0 || quantity<0) {
        document.querySelector("#msg").innerHTML="Invalid Item!";
        return;
    }
    products.push(itemName);
    subTotal += (quantity*price);
    totalQuantity += quantity;

    let discount= 0.00;

    if (subTotal>5000) {
        discount = subTotal * (10/100);
    }
    else if (subTotal>2000) discount = subTotal * (5/100);

    let vat = (subTotal-discount)*(5/100);

    let total = subTotal-discount+vat;

    if (totalQuantity>20) {
        document.querySelector("#msg").innerHTML=`Items: [${products}], QTY: ${quantity}, Subtotal: ${subTotal}, Discout: ${discount}, Vat: ${vat}, Grand Total: ${total}, Bulk Order! Free Delivery`;
        return;
    }

    document.querySelector("#msg").innerHTML=`Items: [${products}], QTY: ${quantity}, Subtotal: ${subTotal}, Discout: ${discount}, Vat: ${vat}, Grand Total: ${total}`;


}