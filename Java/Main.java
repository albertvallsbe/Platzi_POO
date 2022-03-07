//El nom de la classe ha de ser el mateix que el del fitxer
class Main {
    public static void main(String[] args) {
        System.out.println("Hello World");
        Car car = new Car("AMQ123", new Account("Andres Herrera", "AND123"));
        car.passenger = 4;
        car.prindDataCar();


        Car car2 = new Car("QWE456", new Account("Andrea Herrera", "IND123"));
        car2.passenger = 3;
        // System.out.println("Car Licence: " + car2.license);
        car2.prindDataCar();
    }

}