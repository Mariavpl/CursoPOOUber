class Main {

    public static void main(String[] args) {
       // System.out.println("Hola Mundo...");
        //Car car = new Car("AMQ123", new Account("Andres Herrera", "AN123", "andresH@hotmail.com", "12345"));
        //car.passegenger = 4;
       // car.printDataCar();

        System.out.println("UberX...");
        UberX uberX = new UberX("QWE567", new Account("Aandrea Herrera", "ANA567", "andreahrr@hotmail.com", "654321"),"chevrolet", "sonic");
        uberX.setPassenger(4);
        uberX.printDataCar();
    }
}
