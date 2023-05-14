

// Get the filter inputs and button
const minPriceInput = document.getElementById("min-price");
const maxPriceInput = document.getElementById("max-price");
const districtSelect = document.getElementById("district");
const filterButton = document.getElementById("filter-button");


// Get the filtered products container
const filteredProductsContainer = document.querySelector(".posts");



// Display the filtered products in the UI
filteredProducts.forEach((product) => {
console.log("Hi");
  const post = document.createElement("div");
  post.classList.add("post");
  post.innerHTML = `
    <div class="post-preview">
      <img class="img" id="${product.id}" src="${ROOT}/assets/images/Post-images/${product.image}" width="200" height="200" title="${product.image}">
    </div>
    <div class="post-info">
      <div class="post-type">
        ${product.title}
      </div>
      <div class="post-price">
        Rs. ${product.price}
      </div>
      <div class="post-size">
        ${product.size} ${product.unit}
      </div>
      <div class="post-discount">
        ${product.discount} ${product.discount1} OFF
      </div>
      <div style="color:red" class="post-discount">
        <label>Exp : ${product.exp}</label>
      </div>
      <div style="color:gray" class="post-discount">
        <label>${product.city}</label>
      </div>
    </div>
  `;
  filteredProductsContainer.appendChild(post);

});









