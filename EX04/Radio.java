public class Radio implements Device {
    @Override
    public void turnOn() {
        System.out.println("Rádio ligado");
    }

    @Override
    public void turnOff() {
        System.out.println("Rádio desligado");
    }

    @Override
    public void setChannel(int channel) {
        System.out.println("Estação de rádio definida para " + channel);
    }
}
