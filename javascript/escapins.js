let produit = document.querySelector("#specifie-8");
fetch("../Data.json")
  .then((res) => res.json())
  .then((data) => {
    data["semerdji"].forEach((element) => {
      
      produit.innerHTML += `<div class="column col-sp-12 col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 specifie-7 go">
         <div class="column col-12">
            <img class="img-fluid" src="${element.image_url}" alt="${element.title}">
         </div>
         <div class="column col-sp-12 col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
           <h6 class="product-title">
             <span>${element.title}</span>
           </h6>
              <p>${element.new_price}</p>
              <div class="star">
                 <i class="fa-solid fa-star"></i>
                 <i class="fa-solid fa-star"></i>
                 <i class="fa-solid fa-star"></i> 
                 <i class="fa-solid fa-star"></i>
                 <i class="fa-solid fa-star"></i>
             </div>
         </div>
         </div>`; 
    let go = document.querySelectorAll(".go");
      console.log(go.length);
      go.forEach((go) => {
        go.addEventListener("click", (e) => {
          console.log("mety");
          document.querySelector(".text").style.display = "none";
          document.querySelector(".specifie-3").style.display = "none";
          produit.innerHTML = `
                <div class=" specifie-10">
                <div class="specifie-9">
                <div class="img_write">
                    <img class="img-fluid col-sp-12 col-xs-12 col-sm-6 col-lg-6" src="${element.image_url}" alt="${element.title}">
                    <div class="writte col-sp-12 col-xs-12 col-sm-6 col-lg-6">
                        <h4 class="product-title">${element.title}<br>${element.new_price}</h4>
                        <div id="product-description" class="description-short"><p>Le doré et le terra cotta, le combo parfait ! Modèle à plateforme de 4 cm pour un maximum de confort.&nbsp;</p>
                            <p>Si vous êtes entre 2 pointures, optez pour la plus grande des 2</p></div>
                        <div class="product-info">
                            <div class="product-panier">
                                <div class="taille">
                                    <h6>Pointer</h6>
                                    <select name="numeros" class="selectpicker" >
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                    </select>
                                </div>
                            </div>
                            <div class="product-service">
                              <div class="quantite">
                                <h6>Quantité</h6>
                                <div class="increment">
                                  <span class="incre">-</span>
                                  <span>1</span>
                                  <span class="incre">+</span>
                                </div>
                              </div>
                              <div class="ajoute-panier">
                                <button>AJOUTER AU PANIER</button>
                              </div>
                            </div>
                            <div class="blockreassurance_product">
                              <div>
                                <span class="item-product">
                                  <img src="img/joya_32.jpg">
                                  &nbsp;</span>
                                  <p class="block-title" style="color:#000000;">Service client au 06 49 54 94 19</p>
                              </div>
                              <div>
                                <span class="item-product">
                                  <img src="img/joya_33.jpg">
                                            &nbsp;</span>
                                  <p class="block-title" style="color:#000000;">Paiements sécurisés &amp; 3x sans frais avec Alma</p>
                              </div>
                              <div>
                                <span class="item-product">
                                  <img src="img/rea_shipping.png">
                                            &nbsp;
                                </span>
                                  <p class="block-title" style="color:#000000;">Livraison offerte avec Mondial Relay à partir de 100€</p>
                              </div>
                              <div>
                                <span class="item-product">
                                  <img src="img/rea_click_collect.png">
                                            &nbsp;
                                </span>
                                  <p class="block-title" style="color:#000000;">Click &amp; Collect à La Grande Motte</p>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="delais">
                  <h1 class="delais-title">DÉLAIS DU PRODUIT / AVIS</h1>
                  <div class="Reference"><p>Référence</p><span>Sandales double brides beige</span></div>
                  <div class="Reference"><p>En stock</p><span>1 Produits</span></div>
                  <input type="text" name="email" placeholder="votre@email.com"><br>
                  <button class="dispo">Prévener-moi lorsque le est disponible</button>
                </div>
            </div>
            </div>`;
        });
      });
    });
  });

  

