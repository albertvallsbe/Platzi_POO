from car import Car

if __name__ == "__main__":
    print("Hello world")
    car = Car()
    car.license= "AMS234"
    car.driver = "Andres Herrera"
    print(vars(car))

    car2 = Car()
    car2.license= "QWE456"
    car2.driver= "Marta"
    print(vars(car2))