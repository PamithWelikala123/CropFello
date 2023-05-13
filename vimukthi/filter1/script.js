// Get the filter inputs and button
const minPriceInput = document.getElementById("min-price");
const maxPriceInput = document.getElementById("max-price");
const districtSelect = document.getElementById("district");
const filterButton = document.getElementById("filter-button");

// Get the filtered products container
const filteredProductsContainer = document.querySelector(".filtered-products");

// Array of products/posts
const products = [
  { id: 1, title: "Product 1", price: 100, district: "district1" },
  { id: 2, title: "Product 2", price: 200, district: "district2" },
  { id: 3, title: "Product 3", price: 300, district: "district3" },
  { id: 4, title: "Product 4", price: 400, district: "district1" },
  { id: 5, title: "Product 5", price: 500, district: "district2" },
  { id: 6, title: "Product 6", price: 600, district: "district3" },
];

// Function to filter products based on the filter inputs
function filterProducts() {
  // Get the filter values
  const minPrice = minPriceInput.value;
  const maxPrice = maxPriceInput.value;
  const district = districtSelect.value;

  // Filter the products based on the filter values
  const filteredProducts = products.filter((product) => {
    let isPriceMatch = true;
    let isDistrictMatch = true;

    // Check if the product price matches the filter values
    if (minPrice !== "" && product.price < minPrice) {
      isPriceMatch = false;
    }
    if (maxPrice !== "" && product.price > maxPrice) {
      isPriceMatch = false;
    }

    // Check if the product district matches the filter value
    if (district !== "" && product.district !== district) {
      isDistrictMatch = false;
    }

    return isPriceMatch && isDistrictMatch;
  });

  // Clear the filtered products container
  filteredProductsContainer.innerHTML = "";

  // Display the filtered products in the UI
  filteredProducts.forEach((product) => {
    const productCard = document.createElement("div");
    productCard.classList.add("product-card");
    productCard.innerHTML = `
      <h3>${product.title}</h3>
      <p>Price: $${product.price}</p>
      <p>District: ${product.district}</p>
    `;
    filteredProductsContainer.appendChild(productCard);
  });
}

// Add event listener to the filter button
filterButton.addEventListener("click", filterProducts);
