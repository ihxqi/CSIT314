/*--------economy--------------*/
var firstSeatLabel = 1;
$(document).ready(function() {
    var $cart = $('#selected-seats'),
        $counter = $('#counter'),
        $total = $('#total'),
        sc = $('#e-movie-seat-map').seatCharts({
            map: [
                'ee_eee_ee',
                'ee_eee_ee',
                'eeeeeeeee',
            ],
            seats: {
                e: {
                    price: 25,
                    classes: 'economy-class', //your custom CSS class
                    category: 'Standard'
                }
            },
            naming: {
                top: false,
                getLabel: function(character, row, column) {
                    return firstSeatLabel++;
                },
            },
            click: function() {
                if (this.status() == 'available') {
                    //let's create a new <li> which we'll add to the cart items
                    $('<li>' + this.data().category + ' Seat # ' + this.settings.label + '</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
                        .attr('id', 'cart-item-' + this.settings.id)
                        .data('seatId', this.settings.id)
                        .appendTo($cart);

                    /*
                     * Lets update the counter and total
                     *
                     * .find function will not find the current seat, because it will change its stauts only after return
                     * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
                     */
                    $counter.text(sc.find('selected').length + 1);
                    $total.text(recalculateTotal(sc) + this.data().price);

                    var totalamt = 0;
                    totalamt = recalculateTotal(sc) + this.data().price;

                    return 'selected';

                } else if (this.status() == 'selected') {

                    //update the counter
                    $counter.text(sc.find('selected').length - 1);

                    //and total
                    $total.text(recalculateTotal(sc) - this.data().price);
                    

                    //remove the item from our cart
                    $('#cart-item-' + this.settings.id).remove();

                    //seat has been vacated
                    return 'available';

                } else if (this.status() == 'unavailable') {
                    //seat has been already booked
                    return 'unavailable';
                } else {
                    return this.style();
                }
            }
        });

    //this will handle "[cancel]" link clicks
    $('#selected-seats').on('click', '.cancel-cart-item', function() {
        //let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
        sc.get($(this).parents('li:first').data('seatId')).click();
    });


    
});


/*------------------------------------------------------------------------------------------------*/

function recalculateTotal(sc) {
    var total = 0;

    //basically find every selected seat and sum its price
    sc.find('selected').each(function() {

        total += this.data().price;

    });
    
    return total;
}

$(function() {
    $('#checkout-button').click(function() {
        var items = $('#selected-seats li')
        if (items.length <= 0) {
            alert("Please select atleast 1 seat first.")
            return false;
        }
        var selected = [];
        items.each(function(e) {
            var id = $(this).attr('id')
            id = id.replace("cart-item-", "")
            selected.push(id)
        })
         JSON.stringify(selected)
        alert("Seats has been Reserved successfully.")
        location.href = 'customerFnb.php'
    })
    $('#reset-btn').click(function() {
        if (confirm("are you sure to reset the reservation of the movie?") === true) {
            alert("Seats has been Reset successfully.")
            location.reload()
        }
    })
})

/*------------------------------------------------------------------------------------------------*/


var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}


document.getElementById('details').addEventListener('submit', function(event) {
    event.preventDefault();

    var x = document.getElementById("seat-map");
    var v = document.getElementById("e-movie-seat-map")

    var selected = $('#seatselection option:selected').data("relation-id");

    var movieselection = document.forms["details"]["movieselection"].value;
    var cinemaselection = document.forms["details"]["cinemaselection"].value;
    var day = document.forms["details"]["day"].value;
    var customerprofile = document.forms["details"]["customerselection"].value;
    
    if (movieselection == "" || cinemaselection == "" || day == "" || customerprofile == "") {
        alert("Please fill in all required fields.");
        return false;
    } else{
        x.style.visibility = "visible";
        v.style.visibility = "visible";
    }
        
    } 
    // your code to handle the button click here
  );

/*-------------------------------------------------------------------------------------------------------*/

var count = 20; // Timer
var redirect = "/"; // Target URL

function countDown() {
var timer = document.getElementById("timer"); // Timer ID
if (count > 0) {
    count--;
    timer.innerHTML = "This page will redirect in " + count + " seconds."; // Timer Message
    setTimeout("countDown()", 1000);
} else {
    window.location.href = redirect;
}
}

/*---------------------------------------------------------------------------------------------------------*/
