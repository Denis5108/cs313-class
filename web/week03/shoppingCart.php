<!DOCTYPE html>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="styler.css">
        </head>
    <body>
    <div class="product">
     <form method="post" action="checkout.php">
            <div class="products">
                <img src="unknown" />
                <h4 class="price">Price</h4>
                <input type="text" name="quantity" class="form"  />
                Product Name:
                <input type="hidden" name="name" value="name"/>
                Product Price:
                <input type="hidden" name="price" value="price" /><br>
                <input type="submit" name="addtocart" class="btn btn-info" value="Add to cart" />
            </div>
        </form>

    </div>
    </body>
    </html>