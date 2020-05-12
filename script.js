// In this script i mostly use const over var or array, cause we do not need 
//  to change variables

// here constant variable that will grabl all element with class counter
const counters = document.querySelectorAll('.counter');

// this is the speed of counting number
const speed = 1000;

// this is loop that goes through every element of constant called counters
counters.forEach(counter => {
	// updateCount is our function
	const updateCount = () => {
		// in this const we will take value from inside of attribute 
		const target =+ counter.getAttribute('data-target');

		const count =+ counter.innerText;
		// our increment variable, used to modify how many numbers will count per second
		// it depends on our target value
		const inc = target /speed;
		// While we do not reach our target value
		if(count < target){
			// rounds the addition of current counter value to incremention
			counter.innerText = Math.ceil(count + inc);
			// setTimeout is runs function after the certain time, in our case its 1 ms
			setTimeout(updateCount, 1);
			// IF we reach target value
			} else {
				// We will change the inner text of div from 0 to target-value
				count.innerText = target;
			}
	}
// Calling our function
updateCount();
});