

// Get the filter inputs and button
const minPriceInput = document.getElementById("min-price");
const maxPriceInput = document.getElementById("max-price");
const districtSelect = document.getElementById("district");
const filterButton = document.getElementById("filter-button");


// Get the filtered products container














// // Select the input field and the table
// const searchInput = document.getElementById("searchInput");
// const table = document.getElementById("message-table");
// const filterselect=document.getElementById("account-type");


//     searchInput.addEventListener('input', () => {
    
//     const searchTerm = searchInput.value.toLowerCase();

    
//     for (let i = 1; i < table.rows.length; i++) {
//         const row = table.rows[i];
//         const cells = row.cells;
//         let matchesSearch = false;

        
//         for (let j = 0; j < cells.length; j++) {
//         const cell = cells[j];
        
//         if (cell.textContent.toLowerCase().includes(searchTerm)) {
//             matchesSearch = true;
//             break;
//         }
//         }

        
//         if (matchesSearch) {
//         row.style.display = '';
//         } else {
//         row.style.display = 'none';
//         }
//     }
//     });

//     filterselect.addEventListener('change',()=>{
//         const searchTerm = filterselect.value.toLowerCase();

//         if (searchTerm=="all account") {
//             for (let i = 1; i < table.rows.length; i++) {
//                 const row = table.rows[i];
//                 row.style.display = '';
//             }
//         }
//         else{
//             for (let i = 1; i < table.rows.length; i++) {
//                 const row = table.rows[i];
//                 const lastTwoCells = row.cells.length > 1 ? [row.cells[row.cells.length - 2], row.cells[row.cells.length - 1]] : [];
//                 let matchesSearch = false;
        
                
//                 Array.from(lastTwoCells).forEach(cell => {
                
//                 if (cell.textContent.toLowerCase().includes(searchTerm)) {
//                     matchesSearch = true;
//                 }
//                 });
        
                
//                 if (matchesSearch) {
//                 row.style.display = '';
//                 } else {
//                 row.style.display = 'none';
//                 }
//             }
//         }
        
//     });