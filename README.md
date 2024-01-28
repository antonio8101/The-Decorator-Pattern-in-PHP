# Decorator Pattern
Example of the decorator pattern  implementation done in PHP

## What is the Decorator Pattern
The Decorator Pattern was original presented by Erich Gamma, Richard Helm, Ralph Johnson e John Vlissides in their book called `Design Patterns: Elements of Reusable Object-Oriented Software`. 

This book is also known with the title `Gang of Four` *GoF* because of the authors number. 

The book presents many *Design Pattern* which are very useful to developement challeges, by using solution which make the code more flexible and easy to mantain.

### What problem solves this pattern
The Decorator pattern solves the problem of dynamically and flexibly extending object functionalities without modifying their source code. It is beneficial when dealing with a set of base classes, each with basic functionality, and the goal is to add or modify behavior independently and in a combinable way.

### Key Benefits:

- **Extension Without Direct Modifications:** Extend object functionalities without directly modifying the base class, avoiding potential side effects.

- **Flexible Composition:** Allows flexible composition of additional behaviors by combining different decorators in various ways.

- **Open/Closed Principle:** Follows the Open/Closed principle, allowing classes to be open for extension but closed for modification.

- **Maintaining Cohesion:** Avoids the need to create numerous subclasses for handling all possible combinations of functionalities. Instead, functionalities can be flexibly combined through decorator composition.

### UML Samples of a rigid design which adds functionality to a class by using inheritance

#### Class explosion:
![image](https://github.com/antonio8101/decorator_pattern_php/assets/300245/4266d683-2f11-4319-a445-3a6427c24a80)

#### Big dinasty
![image](https://github.com/antonio8101/decorator_pattern_php/assets/300245/b53e4c65-d4c7-43fd-9ad6-25d169cae0fb)

### How the Decorator pattern works

1. **Component Interface:** Define a base interface (Component) with the basic set of operations.

2. **Concrete Component:** Implement the Component interface with a concrete class providing the core functionality.

3. **Decorator Interface:** Create a decorator interface mirroring the Component interface, serving as a blueprint for concrete decorators.

4. **Concrete Decorators:** Develop concrete decorator classes that extend the Decorator interface, adding new functionalities or modifying existing ones.

5. **Composition:** Objects are composed by wrapping them with decorators. Decorators contain instances of the Component interface and can add their own behavior before or after delegating to the component they decorate.

![image](https://github.com/antonio8101/decorator_pattern_php/assets/300245/b80f646a-c069-4718-ad82-fd70da6f091d)

## Additional Resources

To delve deeper into design patterns, including the Decorator Pattern, consider exploring the seminal book:

- **"Design Patterns: Elements of Reusable Object-Oriented Software"** by Erich Gamma, Richard Helm, Ralph Johnson, and John Vlissides (often referred to as the Gang of Four): [Read Online](https://www.amazon.com/Design-Patterns-Elements-Reusable-Object-Oriented/dp/0201633612)

For an online reference on design patterns and the Decorator Pattern, you may find the following resource useful:

- [Head First Design Patterns](https://www.oreilly.com/library/view/head-first-design/0596007124/) - A book that presents design patterns in a more accessible and reader-friendly manner.

Feel free to explore these resources to deepen your understanding of design patterns and their applications.


