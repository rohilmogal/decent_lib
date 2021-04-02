let carts = document.querySelectorAll(".add-cart");

let products = [
  {
    name: " The Last Ship",
    tag: "thelastship",
    category: "novel",
    price: 49,
    incart: 0,
  },
  {
    name: "The Secret",
    tag: "thesecret",
    category: "novel",
    price: 39,
    incart: 0,
  },
  {
    name: "The Kitchen House",
    tag: "thekitchenhouse",
    category: "novel",
    price: 16,
    incart: 0,
  },
  {
    name: "The Poppy Wife",
    tag: "thepoppywife",
    category: "novel",
    price: 20,
    incart: 0,
  },
  {
    name: "Pokhran",
    tag: "pokhran",
    category: "novel",
    price: 10,
    incart: 0,
  },
  {
    name: "Who Are You?",
    tag: "whoareyou",
    category: "novel",
    price: 15,
    incart: 0,
  },
  {
    name: "The Alchemist",
    tag: "thealchemist",
    category: "novel",
    price: 30,
    incart: 0,
  },
  {
    name: " Audre Lorde",
    tag: "audrelorde",
    category: "novel",
    price: 21,
    incart: 0,
  },
  {
    name: " The Passion Within",
    tag: "thepassion",
    category: "novel",
    price: 10,
    incart: 0,
  },
];

for (let i = 0; i < carts.length; i++) {
  carts[i].addEventListener("click", () => {
    cartNumbers(products[i]);
    totalCost(products[i]);
  });
}

function onLoadCartNumbers() {
  let productNumbers = localStorage.getItem("cartNumbers");
  if (productNumbers) {
    document.querySelector(".cart span").textContent = productNumbers;
  }
}

function cartNumbers(product) {
  let productNumbers = localStorage.getItem("cartNumbers");
  productNumbers = parseInt(productNumbers);

  if (productNumbers) {
    localStorage.setItem("cartNumbers", productNumbers + 1);
    document.querySelector(".cart span").textContent = productNumbers + 1;
  } else {
    localStorage.setItem("cartNumbers", 1);
    document.querySelector(".cart span").textContent = 1;
  }
  setItems(product);
}
function setItems(product) {
  let cartItems = localStorage.getItem("ProductsInCart");
  cartItems = JSON.parse(cartItems);

  if (cartItems != null) {
    if (cartItems[product.tag] == undefined) {
      cartItems = {
        ...cartItems,
        [product.tag]: product,
      };
    }
    cartItems[product.tag].incart += 1;
  } else {
    product.incart = 1;
    cartItems = {
      [product.tag]: product,
    };
  }
  localStorage.setItem("ProductsInCart", JSON.stringify(cartItems));
}
function totalCost(product) {
  //console.log("The product price is", product.price);

  let cartCost = localStorage.getItem("totalCost");
  console.log("My cart cost is", cartCost);
  console.log(typeof cartCost);

  if (cartCost != null) {
    cartCost = parseInt(cartCost);
    localStorage.setItem("totalCost", cartCost + product.price);
  } else {
    localStorage.setItem("totalCost", product.price);
  }
}

function displayCart() {
  let cartItems = localStorage.getItem("ProductsInCart");
  let itemCount = localStorage.getItem("cartNumbers");
  cartItems = JSON.parse(cartItems);
  let productContainer = document.querySelector(".product-container");
  let itemCountDisplay = document.querySelector(".item-count");
  let totalCostDisplay = document.querySelector(".total-cost");
  let cartCost = localStorage.getItem("totalCost");
  console.log(cartItems);
  if (cartItems && productContainer) {
    productContainer.innerHTML = "";
    totalCostDisplay.innerHTML = "";
    itemCount.innerHTML = "";
    Object.values(cartItems).map((item) => {
      productContainer.innerHTML += `
        <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
          <div class="flex w-2/5">
            <div class="w-20">
              <img class="h-24" src="./images/${item.tag}.jpg" alt="">
            </div>
            <div class="flex flex-col justify-between ml-4 flex-grow">
              <span class="font-bold text-3xl">${item.name}</span>
              <span class="text-red-500 text-md mb-5">${item.category}</span>
            </div>
          </div>
          <div class="flex justify-center w-1/5 items-center mx-auto">
            <svg class="fill-current text-gray-600 w-8 h-8" viewBox="0 0 448 512">
              <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
            </svg>

            <input class="border text-center w-1/5 h-2 m-8" type="text" value="${
              item.incart
            }">

            <svg class="fill-current text-gray-600 w-8 h-8" viewBox="0 0 448 512">
              <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
            </svg>
          </div>
          <span class="text-center w-1/5 font-semibold text-2xl">$${
            item.incart * item.price
          }</span>
          <a href="#" class="font-semibold w-1/5 hover:text-red-500 text-gray-500 text-md">Remove</a>
        </div>
      `;
      totalCostDisplay.innerHTML = `
        <span>$${cartCost}</span>
      `;

      itemCountDisplay.innerHTML = `
        <span class="font-semibold text-md">${itemCount}</span>
      `;
    });
  }
}
onLoadCartNumbers();
displayCart();
