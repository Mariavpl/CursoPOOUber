from car import Car
from account import Account

if __name__=="__main__":
    print("Hola Mundo")


    car = Car("AMW234", Account("Andres Herrera", "ANA567"))
    print(vars(car))
    print(vars(car.driver))

  