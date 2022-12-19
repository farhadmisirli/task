
**Used OOP Principles**
- Single Responsibility Principle (SRP)
- Open Closed Principle
- DAO design pattern
- Factory Design Pattern `new`

I used DAO (Access Object Pattern) pattern to separate data accessing operations from business services.
I created 3 seperated class for operations to obey SRP. Each of them is responsible for its own implementation.
So if any change required in one of operations, we don't have to edit the whole class.
In the future if u want to add another TransactionalOperation all you need to create another class that implements `OperationalTransaction`.
And so we can easily extend functionality and while doing this we don't have to make any changes.
I also used Factory Design pattern (`OperationFactory`). So we don't need to know about internal implementations. We will interact with only `OperationFactory` class to get instance of operation which we want.

You can take `index.php` as an entry point of our application. 
For instance, I implemented `withdraw` operation. 
I am also planing to write some unit tests.

Thanks!

