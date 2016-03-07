function Cat(breed, name){
  this.breed = breed;
  this.name = name;
  this.intro = function(){
    console.log('Meet ' + this.name + "," + ' he\'s a ' + this.breed + ' cat.')
  };
  this.speak = function(){
      console.log('Meooooow')
  };
};

var cooper = new Cat('Tuxedo', 'Cooper');
cooper.speak();
cooper.intro();















