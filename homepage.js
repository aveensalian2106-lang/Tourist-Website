// code for changing images in the landing page of the website

const imagedata = [
  {
    img: "images/goa.jpg",
    heading: " GOA BEACH",
    day: 5,
    location: "goa",
    price: 12500,
    places:
      "Baga Beach, Calangute Beach, Anjuna Flea Market, Fort Aguada, Chapora Fort, Basilica of Bom Jesus",
    descrpt:
      "Welcome to Goa, the jewel of India's coast! Sink your toes into golden sands, framed by swaying palms and vibrant beach shacks. Indulge in thrilling watersports, savor authentic Goan seafood, and dance into the night with the lively music scene. Experience the ultimate blend of relaxation and exhilaration.",
  },
  {
    img: "images/himachal.jpg",
    heading: "HIMACHAL MOUNTAINS",
    day: 6,
    price: 28600,
    location: "jammu and kashmir",
    places:
      "Shimla, Manali, Dharamshala, McLeod Ganj, Kullu, Dalhousie, Kasol, Kasauli, Spiti Valley, Bir Billing, Khajjiar, Chamba, Kinnaur.",
    descrpt:
      "Trade the sand for snow-capped peaks and azure high-altitude lakes. Leh-Ladakh is a thrilling, secluded paradise offering magnificent Himalayan vistas, ancient monasteries, and the famous, colour-changing Pangong Lake. This is where silence meets spectacle for the ultimate mountain escape.",
  },
  {
    img: "images/munnar.jpg",
    heading: "MUNNAR",
    price: 12500,
    location: "kerla",
    day: 12,
    places:
      "Munnar, Alleppey (Alappuzha), Kochi (Cochin), Wayanad, Thekkady, Kovalam, Kumarakom, Varkala, Bekal, Athirappilly Waterfalls.",
    descrpt:
      "While Munnar has no direct beach, it offers a sea of unparalleled emerald green. Explore unending tea plantations, misty mountains, and cascading waterfalls. Discover the 'Kashmir of South India,' a refreshing, tranquil paradise offering nature walks, spice tours, and a truly unforgettable hill escape",
  },

  {
    img: "images/taj.jpg",
    heading: "TAJ MAHAL",
    location: "delhi",
    price: 5000,
    day: 9,
    places:
      "Red Fort, Qutub Minar, India Gate, Lotus Temple, Humayuns Tomb, Jama Masjid, Akshardham Temple, Gurudwara Bangla Sahi",
    descrpt:
      "Witness the immortal poem in marble, the Taj Mahal. This UNESCO masterpiece, an eternal monument of love, shimmers with changing hues from sunrise to sunset. Marvel at its perfect symmetry, intricate pietra dura inlay, and majestic dome, standing proudly on the Yamuna riverbank. A wonder of the world not to be missed.",
  },
  {
    img: "images/desert.jpg",
    heading: "SARA DESERT",
    day: 5,
    price: 2000,
    location: "rajastan",
    places:
      "Jaipur (Pink City), Udaipur (City of Lakes), Jodhpur (Blue City), Jaisalmer (Golden City), Bikaner, Pushkar, Mount Abu, Ajmer, Ranthambore National Park",
    descrpt:
      "Escape to Sara Descer Beach, a hidden gem of golden sands and tranquil turquoise waters. The gentle waves, lined with swaying palms, create a perfect paradise for relaxation. Spend your day swimming, sunbathing, or watching the spectacular ocean sunset. Your peaceful coastal retreat awaits.",
  },
];

function change() {
  setInterval(() => {
    let background = document.querySelector(".page1");
    let placename = document.querySelector("#placename");
    let description = document.querySelector("#desc");
    let page2img = document.querySelector("#page2img");
    let page2placename = document.querySelector("#page2place");
    const page2loc = document.querySelector("#location");
    let page2date = document.querySelector("#datetime");
    let page2dest = document.querySelector("#page2dest");
    let page2price = document.querySelector("#page2price");
    const random = Math.floor(Math.random() * 5);
    console.log(random);
    background.style.backgroundImage = `url(${imagedata[random].img})`;
    placename.textContent = imagedata[random].heading;
    description.textContent = imagedata[random].descrpt;
    page2img.src = imagedata[random+1].img;
    page2placename.textContent = imagedata[random+1].heading;
    page2loc.textContent = imagedata[random+1].location;
    page2date.textContent = imagedata[random+1].day;
    page2dest.textContent = imagedata[random+1].places;
    page2price.textContent = imagedata[random+1].price;
  }, 3000);
}

change();
