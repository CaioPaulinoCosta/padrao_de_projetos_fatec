// Implementação concreta de um controle remoto básico
public class BasicRemote implements Remote {
    protected Device device;

    public BasicRemote(Device device) {
        this.device = device;
    }

    @Override
    public void powerOn() {
        System.out.println("Controle remoto básico: Ligar");
        device.turnOn();
    }

    @Override
    public void powerOff() {
        System.out.println("Controle remoto básico: Desligar");
        device.turnOff();
    }

    @Override
    public void setChannel(int channel) {
        System.out.println("Controle remoto básico: Definir canal");
        device.setChannel(channel);
    }
}
