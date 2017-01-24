/* Arrays are variables that can hold more than one piece of data. Each piece of data in an array is referred to as an element. */
var myArray = [3, 4, 63, 21, 90, 37282, 72];

/* Instead of one variable, holding one piece of data, you create arrays to hold multiple pieces of data. */
var myVariable = 56;
var mySecondArray = [56, 21, 483];

/* When you should use an array:
- If you need list.
- If you have variables that are related to one another.
- If you need to group related variables together.*/
var store = 'Publix';
var groceryList = ['Oranges', 'Cereal', 'Grapes', 'Bread'];

/* Arrays in Javascript, can hold different data types. In other words, a single array can hold numbers, strings, booleans, and even other arrays. */
var mixedArray = ['Boat', 53, '4563', false, 2829];

/* Arrays that hold other arrays inside of them, are called multidimensional arrays. */
var multiArray = [
		[23, 'Alan'],
		[54, 'George'],
		[29, 'Amber'],
		[42, 'Emily']
	];

/* Each element is assigned an index number in an array. To access the element, you would reference its index number. We call this, 'accessing an array'. */
var partyGuests = ['Jeff', 'Carrie', 'Brad', 'Joey'];
document.write('<br>' + partyGuests[1]);

