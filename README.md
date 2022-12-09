
**Used OOP Principles**
- Single Responsibility Principle (SRP)
- Open Closed Principle
- DAO design pattern

I used DAO (Access Object Pattern) pattern to separate data accessing operations from business services.
I created 3 seperated class for operations to obey SRP. Each of them is responsible for its own implementation.
So if any change required in one of operations, we don't have to edit the whole class.
In the future if u want to add another TransactionalOperation all you need to create another class that implements `OperationalTransaction`.
And so we can easily extends functionality and while doing this we don't have to make any changes.