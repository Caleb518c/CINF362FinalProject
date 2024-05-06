const taskTable = document.querySelector("#todaysTaskTable");

let numberOfRoomates = 4;

const getNumberOfRoommates = () => {
  return numberOfRoomates;
};

const newTask = () => {
  // Get user inputs
  const selectedImage = document.querySelector(
    'input[name="image"]:checked'
  ).value;
  const taskName = document.querySelector("#taskNameInput").value.trim(); // Trim any whitespace

  // Check if task name is filled
  if (taskName === "") {
    alert("Please enter a task name.");
    return; // Stop execution if task name is empty
  }

  // Create table row
  let taskInputForm = document.createElement("tr");
  taskInputForm.classList.add("taskTableRow");

  // Create table header for image
  let imgCell = document.createElement("th");
  let img = document.createElement("img");
  img.src = selectedImage;
  img.alt = "Task Image";
  imgCell.appendChild(img);

  // Create table header for task name
  let taskCell = document.createElement("th");
  let taskText = document.createElement("p");
  taskText.textContent = taskName;
  taskCell.appendChild(taskText);

  // Create table header for checkbox
  let checkboxCell = document.createElement("th");
  let checkbox = document.createElement("input");
  checkbox.type = "checkbox";
  checkboxCell.appendChild(checkbox);

  // Append table headers to the table row
  taskInputForm.appendChild(imgCell);
  taskInputForm.appendChild(taskCell);
  taskInputForm.appendChild(checkboxCell);

  // Append table row to the table
  taskTable.appendChild(taskInputForm);

  // Clear input fields after adding task
  document.querySelector("#taskNameInput").value = "";
};

const newRoommate = () => {
  numberOfRoomates += 1;
  const roomiesHeader = document.getElementById("roomiesHeader");
  roomiesHeader.textContent = `Roomies (${getNumberOfRoommates()})`;

  const roommateImgContainer = document.querySelector(
    ".allRoomatesProfileImgContainer"
  );

  // Generate a random number between 1 and 4
  const randomNumber = Math.floor(Math.random() * 4) + 1;

  // Determine the file extension based on the random number
  const fileExtension = randomNumber === 1 ? "jpeg" : "jpg";

  // Create image element
  const a = document.createElement("a");
  const img = document.createElement("img");
  img.src = `./images/roomate${randomNumber}.${fileExtension}`;
  img.alt = "";

  // Append image element to the container
  a.appendChild(img);
  roommateImgContainer.appendChild(a);
};
