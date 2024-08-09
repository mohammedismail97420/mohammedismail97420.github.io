function calculateTime() {
  // Get the entry time value from the input
  const entryTime = document.getElementById("time").value;

  // Convert entry time to a Date object
  const entryDate = new Date();
  const [hours, minutes] = entryTime.split(":");
  entryDate.setHours(hours);
  entryDate.setMinutes(minutes);

  // Get the current time
  const now = new Date();

  // Calculate the gross time (time completed till now from entry time)
  const grossTimeMs = now - entryDate;
  const grossHours = Math.floor(grossTimeMs / 1000 / 60 / 60);
  const grossMinutes = Math.floor((grossTimeMs / 1000 / 60) % 60);

  // Display the gross time
  const grossTimeElement = document.getElementById("gross_time");
  grossTimeElement.innerHTML = `Time completed: <span class="text-[green]">${grossHours}h ${grossMinutes}m</span>`;

  // Calculate the time to leave after completing 8hr30m
  const leaveTime = new Date(entryDate.getTime() + 8.5 * 60 * 60 * 1000);
  // Convert leave time to 12-hour format
  let leaveHours = leaveTime.getHours();
  const leaveMinutes = leaveTime.getMinutes().toString().padStart(2, "0");
  const ampm = leaveHours >= 12 ? "PM" : "AM";
  leaveHours = leaveHours % 12 || 12; // Convert 24-hour to 12-hour format

  // Display the leave time
  const leaveByWorkingElement = document.getElementById("leave_by_working");
  leaveByWorkingElement.innerHTML = `Leave by: <span class="text-[green] text-[30px]">${leaveHours}:${leaveMinutes} ${ampm}</span>`;

  // Calculate the remaining time to leave
  const remainingTimeMs = leaveTime - now;
  const remainingHours = Math.floor(remainingTimeMs / 1000 / 60 / 60);
  const remainingMinutes = Math.floor((remainingTimeMs / 1000 / 60) % 60);

  // Display the remaining time
  const remainingTimeElement = document.getElementById("remaining_time");
  remainingTimeElement.innerHTML = `Remaining Time: <span class="text-[green]">${remainingHours}h ${remainingMinutes}m</span>`;

  // Prevent form submission
  return false;
}
