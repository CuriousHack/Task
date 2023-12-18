<script>
    // Get the modal
        var modal = document.getElementById('modal');
    
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event){ 
        if (event.target == modal) {
        modal.style.display = "none"
         }
        }

    let subMenu = document.getElementById("subMenu");

    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
        
    </script>