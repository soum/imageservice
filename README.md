## imageservice

######features: 
1. Send request parameters such as image of the product that needs to be engraved 
2. Text that needs to be engraved on the product
3. Save the new image file with overlayed text in a directory (in the app server)

######request parameters:

http://localhost:8888/imageService/?url={absolute image url}&text={string}&order={order number}&serviceKey={service key}

sameple image url to use: 

http://localhost:8888/imageService/?url=http://demandware.edgesuite.net/sits_pod20/dw/image/v2/AAVP_PRD/on/demandware.static/-/Sites-mgi-master/default/dw64779e21/images/products/0606576w_LRG_rgb_Back.jpg?sw=450&amp;sh=450&amp;sm=fit&text=Tom&order=2165822C&serviceKey={incripted domain name}
