<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, th, td{
        border: 1px solid black;
    }
   .curriculum{
    margin-left: 30px;
    margin-right: 30px;
   }

    body{
        margin: 0;
        padding: 0;
    }
    .firsttable{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .text{
      display: flex;
      justify-content: center;
    }
.buttons button {
    margin-right: 5px;
    background-color: transparent;
    border: 1px solid #77d491;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.buttons button:hover {
    background-color: #77d491;
    color: white;
}
.buttons {
      margin-top: 10px; /* Adjust the top margin to add space between the buttons and the table */
    text-align: center; /* Adjust the top margin to add space between the buttons and the table */
}

</style>

<body class class="curriculum" id="editableTable">
<div class="text" id="curriculumTitle" contenteditable="true">
    <h1>Curriculum 2021</h1>
</div>
  <div class="text"><h1>First Year</h1></div>

    <div class="firsttable" >
    <table class="curriculum">
      <tr>
        <th colspan="7">First Semester</th>
      </tr>
        <tr>
          <th rowspan="2">Pen Code</th>
          <th rowspan="2">Descriptive Title</th>
          <th colspan="3">Units</th>
          <th rowspan="2">Pre-requisite</th>
          <th rowspan="2">Grade</th>
        </tr>
        <tr>
            <th>Lec</th>
            <th>Lab</th>
            <th>Total</th>
        </tr>
        <tr>
         <td>GEN 002</td>
         <td>Undertstanding the Self</td>
         <td>3</td>
         <td>0</td>
         <td>3</td>
         <td>none</td>
         <td></td>
        </tr>
        <tr>
          <td>HIS 007</td>
          <td>Life and Works of Rizal</td>
          <td>3</td>
          <td>0</td>
          <td>3</td>
          <td>none</td>
          <td></td>
         </tr>
         <tr>
          <td>GEN 001</td>
          <td>Purposive Communication</td>
          <td>3</td>
          <td>0</td>
          <td>3</td>
          <td>none</td>
          <td></td>
         </tr>
         <tr>
          <td>MAT 152</td>
          <td>Mathematics in the Modern World</td>
          <td>3</td>
          <td>0</td>
          <td>3</td>
          <td>none</td>
          <td></td>
         </tr>
         <tr>
          <td>ITE 288</td>
          <td>Introduction to Computing</td>
          <td>2</td>
          <td>1</td>
          <td>3</td>
          <td>none</td>
          <td></td>
         </tr>
         <tr>
          <td>ITE 260</td>
          <td>Computer Programming</td>
          <td>2</td>
          <td>1</td>
          <td>3</td>
          <td>none</td>
          <td></td>
         </tr>
         <tr>
          <td>NST 019</td>
          <td>National Service Training Program 1</td>
          <td>3</td>
          <td>0</td>
          <td>3</td>
          <td>none</td>
          <td></td>
         </tr>
         <tr>
          <td>PED 025</td>
          <td>Movement Enhancement</td>
          <td>2</td>
          <td>0</td>
          <td>3</td>
          <td>none</td>
          <td></td>
         </tr>
         <tr>
          <td></td>
          <td>Total</td>
          <td>21</td>
          <td>2</td>
          <td>23</td>
          <td></td>
          <td></td>
         </tr>
      </table>


      <table class="curriculum">
        <tr>
          <th colspan="7">Second Semester</th>
        </tr>
          <tr>
            <th rowspan="2">Pen Code</th>
            <th rowspan="2">Descriptive Title</th>
            <th colspan="3">Units</th>
            <th rowspan="2">Pre-requisite</th>
            <th rowspan="2">Grade</th>
          </tr>
          <tr>
              <th>Lec</th>
              <th>Lab</th>
              <th>Total</th>
          </tr>
          <tr>
           <td>GEN 005</td>
           <td>The Contemporary World</td>
           <td>3</td>
           <td>0</td>
           <td>3</td>
           <td>none</td>
           <td></td>
          </tr>
          <tr>
            <td>Art 002</td>
            <td>Art Appreciation</td>
            <td>3</td>
            <td>0</td>
            <td>3</td>
            <td>none</td>
            <td></td>
           </tr>
           <tr>
            <td>GEN 003</td>
            <td>Science, Technology and Society</td>
            <td>3</td>
            <td>0</td>
            <td>3</td>
            <td>none</td>
            <td></td>
           </tr>
           <tr>
            <td>GEN 004</td>
            <td>Readings in Philippine History</td>
            <td>3</td>
            <td>0</td>
            <td>3</td>
            <td>none</td>
            <td></td>
           </tr>
           <tr>
            <td>ITE 186</td>
            <td>Computer Programming 2</td>
            <td>2</td>
            <td>1</td>
            <td>3</td>
            <td>ITE 260</td>
            <td></td>
           </tr>
           <tr>
            <td>ITE 291</td>
            <td>Human Computer Interaction</td>
            <td>2</td>
            <td>1</td>
            <td>3</td>
            <td>ITE 288</td>
            <td></td>
           </tr>
           <tr>
            <td>NST 020</td>
            <td>National Service Training Program 2</td>
            <td>3</td>
            <td>0</td>
            <td>3</td>
            <td>NST 019</td>
            <td></td>
           </tr>
           <tr>
            <td>PED 026</td>
            <td>Fitness Exercise</td>
            <td>2</td>
            <td>0</td>
            <td>2</td>
            <td>PED 025</td>
            <td></td>
           </tr>
           <tr>
            <td></td>
            <td>Total</td>
            <td>21</td>
            <td>2</td>
            <td>23</td>
            <td></td>
            <td></td>
           </tr>
        </table>
    
      </div>
      <div class="text"><h1>Second Year</h1></div>

      <div class="firsttable" >
      <table class="curriculum">
        <tr>
          <th colspan="7">First Semester</th>
        </tr>
          <tr>
            <th rowspan="2">Pen Code</th>
            <th rowspan="2">Descriptive Title</th>
            <th colspan="3">Units</th>
            <th rowspan="2">Pre-requisite</th>
            <th rowspan="2">Grade</th>
          </tr>
          <tr>
              <th>Lec</th>
              <th>Lab</th>
              <th>Total</th>
          </tr>
          <tr>
           <td>ITE 299</td>
           <td>Ethics including Social and Professional Issues</td>
           <td>3</td>
           <td>0</td>
           <td>3</td>
           <td>none</td>
           <td></td>
          </tr>
          <tr>
            <td>FIL 124</td>
            <td>Kontekstwalisadong Komunikasyon sa Filipino</td>
            <td>3</td>
            <td>0</td>
            <td>3</td>
            <td>none</td>
            <td></td>
           </tr>
           <tr>
            <td>FIL 127</td>
            <td>Sosyedad Literatura/Panitikang Panlipunan</td>
            <td>3</td>
            <td>0</td>
            <td>3</td>
            <td>none</td>
            <td></td>
           </tr>
           <tr>
            <td>ITE 048</td>
            <td>Discrete Structures</td>
            <td>3</td>
            <td>0</td>
            <td>3</td>
            <td>MAT 152</td>
            <td></td>
           </tr>
           <tr>
            <td>ITE 031</td>
            <td>Data Structures and Algorithm</td>
            <td>2</td>
            <td>1</td>
            <td>3</td>
            <td>none</td>
            <td></td>
           </tr>
           <tr>
            <td>ITE 300</td>
            <td>Object Oriented Programming</td>
            <td>2</td>
            <td>1</td>
            <td>3</td>
            <td>ITE 186</td>
            <td></td>
           </tr>
           <tr>
            <td>ITE 292</td>
            <td>Networking 1</td>
            <td>2</td>
            <td>1</td>
            <td>3</td>
            <td>ITE 291</td>
            <td></td>
           </tr>
           <tr>
            <td>SSP 005</td>
            <td>Movement Enhancement</td>
            <td>2</td>
            <td>0</td>
            <td>3</td>
            <td>none</td>
            <td></td>
           </tr>
           <tr>
            <td>PED 027</td>
            <td>Physical Activities Towards Health and Fitness</td>
            <td>2</td>
            <td>0</td>
            <td>2</td>
            <td>PED 025</td>
            <td></td>
           </tr>
           <tr>
            <td></td>
            <td>Total</td>
            <td>21</td>
            <td>3</td>
            <td>24</td>
            <td></td>
            <td></td>
           </tr>
        </table>


        <table class="curriculum">
          <tr>
            <th colspan="7">Second Semester</th>
          </tr>
            <tr>
              <th rowspan="2">Pen Code</th>
              <th rowspan="2">Descriptive Title</th>
              <th colspan="3">Units</th>
              <th rowspan="2">Pre-requisite</th>
              <th rowspan="2">Grade</th>
            </tr>
            <tr>
                <th>Lec</th>
                <th>Lab</th>
                <th>Total</th>
            </tr>
            <tr>
             <td>FIL 125</td>
             <td>Filipino sa iba't ibang Disiplina</td>
             <td>3</td>
             <td>0</td>
             <td>3</td>
             <td>FIL 124</td>
             <td></td>
            </tr>
            <tr>
              <td>FIL 128</td>
              <td>Sinesosyedad/Pelikulang Panlipunan</td>
              <td>3</td>
              <td>0</td>
              <td>3</td>
              <td>FIL 127</td>
              <td></td>
             </tr>
             <tr>
              <td>ITE 298</td>
              <td>Information Management</td>
              <td>2</td>
              <td>1</td>
              <td>3</td>
              <td>ITE 300</td>
              <td></td>
             </tr>
             <tr>
              <td>ITE 302</td>
              <td>Information Assurance and Security</td>
              <td>2</td>
              <td>1</td>
              <td>3</td>
              <td>ITE 031</td>
              <td></td>
             </tr>
             <tr>
              <td>ITE 303</td>
              <td>System Integration and Architecture 1</td>
              <td>2</td>
              <td>1</td>
              <td>3</td>
              <td>ITE 300</td>
              <td></td>
             </tr>
             <tr>
              <td>ITE 304</td>
              <td>Networking 2</td>
              <td>3</td>
              <td>0</td>
              <td>3</td>
              <td>ITE 292</td>
              <td></td>
             </tr>
             <tr>
              <td>ITE 115</td>
              <td>Information Technology Elective 1</td>
              <td>3</td>
              <td>0</td>
              <td>3</td>
              <td>2nd Year Standing</td>
              <td></td>
             </tr>
             <tr>
              <td>PED 028</td>
              <td>Physical Activities Towards Health and Fitness II</td>
              <td>2</td>
              <td>0</td>
              <td>2</td>
              <td>PED 025</td>
              <td></td>
             </tr>
             <tr>
              <td>SSP 006</td>
              <td>Student Success Program 2</td>
              <td>1</td>
              <td>0</td>
              <td>1</td>
              <td>none</td>
              <td></td>
             </tr>
             <tr>
              <td></td>
              <td>Total</td>
              <td>21</td>
              <td>3</td>
              <td>24</td>
              <td></td>
              <td></td>
             </tr>
          </table>
        </div>

        <div class="text"><h1>Third Year</h1></div>

<div class="firsttable" >
<table class="curriculum">
  <tr>
    <th colspan="7">First Semester</th>
  </tr>
    <tr>
      <th rowspan="2">Pen Code</th>
      <th rowspan="2">Descriptive Title</th>
      <th colspan="3">Units</th>
      <th rowspan="2">Pre-requisite</th>
      <th rowspan="2">Grade</th>
    </tr>
    <tr>
        <th>Lec</th>
        <th>Lab</th>
        <th>Total</th>
    </tr>
    <tr>
     <td>ITE 301</td>
     <td>Application Development and Emerging Technologies</td>
     <td>3</td>
     <td>0</td>
     <td>3</td>
     <td>ITE 298</td>
     <td></td>
    </tr>
    <tr>
      <td>ITE 314</td>
      <td>Advanced Database Systems</td>
      <td>2</td>
      <td>1</td>
      <td>3</td>
      <td>ITE 298</td>
      <td></td>
     </tr>
     <tr>
      <td>ITE 306</td>
      <td>Integrative Programming and Technologies</td>
      <td>2</td>
      <td>1</td>
      <td>3</td>
      <td>ITE 303</td>
      <td></td>
     </tr>
     <tr>
      <td>ITE 307</td>
      <td>Quantitative Methods (including Modeling and Simulation</td>
      <td>3</td>
      <td>0</td>
      <td>3</td>
      <td>MAT 152</td>
      <td></td>
     </tr>
     <tr>
      <td>ITE 308</td>
      <td>Web System and Technologies</td>
      <td>2</td>
      <td>1</td>
      <td>3</td>
      <td>ITE 298</td>
      <td></td>
     </tr>
     <tr>
      <td>ITE 235</td>
      <td>Information Technology Elective 2</td>
      <td>3</td>
      <td>0</td>
      <td>3</td>
      <td>ELECTIVE 1</td>
      <td></td>
     </tr>
     <tr>
      <td>ITE 309</td>
      <td>Capstone Projectt and Research 1</td>
      <td>3</td>
      <td>0</td>
      <td>3</td>
      <td>ITE 302/ITE 303</td>
      <td></td>
     </tr>
     <tr>
      <td>SSP 007</td>
      <td>Student Success Program 3</td>
      <td>1</td>
      <td>0</td>
      <td>1</td>
      <td>SSP 006</td>
      <td></td>
     </tr>
     <tr>
      <td></td>
      <td>Total</td>
      <td>19</td>
      <td>3</td>
      <td>22</td>
      <td></td>
      <td></td>
     </tr>
  </table>


  <table class="curriculum">
    <tr>
      <th colspan="7">Second Semester</th>
    </tr>
      <tr>
        <th rowspan="2">Pen Code</th>
        <th rowspan="2">Descriptive Title</th>
        <th colspan="3">Units</th>
        <th rowspan="2">Pre-requisite</th>
        <th rowspan="2">Grade</th>
      </tr>
      <tr>
          <th>Lec</th>
          <th>Lab</th>
          <th>Total</th>
      </tr>
      <tr>
       <td>ITE 293</td>
       <td>Systems Administration and Maintenance</td>
       <td>2</td>
       <td>1</td>
       <td>3</td>
       <td>ITE 314</td>
       <td></td>
      </tr>
      <tr>
        <td>ITE 305</td>
        <td>Information Assurance and Security 2</td>
        <td>2</td>
        <td>1</td>
        <td>3</td>
        <td>ITE 302</td>
        <td></td>
       </tr>
       <tr>
        <td>ITE 335</td>
        <td>Information Technology Elective 3</td>
        <td>3</td>
        <td>0</td>
        <td>3</td>
        <td>ELECTIVE 2</td>
        <td></td>
       </tr>
       <tr>
        <td>ITE 333</td>
        <td>Information Technology Elective </td>
        <td>2</td>
        <td>1</td>
        <td>3</td>
        <td>ELECTIVE 2</td>
        <td></td>
       </tr>
       <tr>
        <td>ITE 310</td>
        <td>Capstone Project and Research 2</td>
        <td>3</td>
        <td>0</td>
        <td>3</td>
        <td>ITE 309</td>
        <td></td>
       </tr>
       <tr>
        <td>SSP 008</td>
        <td>Student Success Program 4</td>
        <td>2</td>
        <td>1</td>
        <td>3</td>
        <td>SSP 007</td>
        <td></td>
       </tr>
       <tr>
        <td></td>
        <td>Total</td>
        <td>13</td>
        <td>3</td>
        <td>16</td>
        <td></td>
        <td></td>
       </tr>
    </table>
  </div>

  <div class="text"><h1>Fourth Year</h1></div>

<div class="firsttable" >
<table class="curriculum">
  <tr>
    <th colspan="7">First Semester</th>
  </tr>
    <tr>
      <th rowspan="2">Pen Code</th>
      <th rowspan="2">Descriptive Title</th>
      <th colspan="3">Units</th>
      <th rowspan="2">Pre-requisite</th>
      <th rowspan="2">Grade</th>
    </tr>
    <tr>
        <th>Lec</th>
        <th>Lab</th>
        <th>Total</th>
    </tr>
    <tr>
     <td>ITE 322</td>
     <td>Managing IT Resources</td>
     <td>3</td>
     <td>0</td>
     <td>3</td>
     <td>ITE 303</td>
     <td></td>
    </tr>
    <tr>
      <td>ITE 351</td>
      <td>New Venture Creation (4 units)</td>
      <td>4</td>
      <td>0</td>
      <td>4</td>
      <td>ITE 310</td>
      <td></td>
     </tr>
     <tr>
      <td>SSP 009</td>
      <td>Student Success Program 5</td>
      <td>1</td>
      <td>0</td>
      <td>1</td>
      <td>SSP 008</td>
      <td></td>
     </tr>
     <tr>
      <td></td>
      <td>Total</td>
      <td>8</td>
      <td>0</td>
      <td>8</td>
      <td></td>
      <td></td>
     </tr>
  </table>


  <table class="curriculum">
    <tr>
      <th colspan="7">Second Semester</th>
    </tr>
      <tr>
        <th rowspan="2">Pen Code</th>
        <th rowspan="2">Descriptive Title</th>
        <th colspan="3">Units</th>
        <th rowspan="2">Pre-requisite</th>
        <th rowspan="2">Grade</th>
      </tr>
      <tr>
          <th>Lec</th>
          <th>Lab</th>
          <th>Total</th>
      </tr>
      <tr>
       <td>ITE 311</td>
       <td>Information Technology Practicum</td>
       <td>6</td>
       <td>0</td>
       <td>6</td>
       <td>none</td>
       <td></td>
      </tr>
       <tr>
        <td></td>
        <td>Total</td>
        <td>6</td>
        <td>0</td>
        <td>6</td>
        <td></td>
        <td></td>
       </tr>
          </table>
        </div>
        <div class="buttons">
        <button onclick="makeTableEditable()">Edit</button>
        <button onclick="saveTableData()">Save</button>
        <button onclick="cloneTable()">Create New Curriculum</button>
        <button onclick="printTable()">Print</button>
    </div>
        <script>
          let setsCreated = 0;

          function makeTableEditable() {
    const table = document.getElementById('editableTable');
    const cells = table.querySelectorAll('td');
    cells.forEach(cell => {
        cell.contentEditable = true;
    });
}

function saveTableData() {
    const table = document.getElementById('editableTable');
    const cells = table.querySelectorAll('td');
    const data = [];

    cells.forEach(cell => {
        data.push(cell.textContent);
    });

  // Send data to the save.php endpoint using AJAX
    fetch('curriculumapi.php', {
        method: 'POST',
        body: JSON.stringify({ content: data }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        console.log('Data saved successfully:', data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
function cloneTable() {
    const table = document.getElementById('editableTable');
    const clone = table.cloneNode(true);

    // Clear the cloned table data
    const cells = clone.querySelectorAll('td');
    cells.forEach(cell => {
        cell.textContent = '';
    });

    // Append the cloned table to the body or any other container
    document.body.appendChild(clone);

    // Make the cloned table editable
    makeTableEditable();
}
function printTable() {
            window.print(); // This triggers the browser's print functionality
        }



        </script>
</body>
</html>