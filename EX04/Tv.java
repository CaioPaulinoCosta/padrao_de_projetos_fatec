public class Tv implements Device {
    private boolean on = false;
    private int channel = 1;

    @Override
    public void turnOn() {
        System.out.println("TV ligada");
        on = true;
    }

    @Override
    public void turnOff() {
        System.out.println("TV desligada");
        on = false;
    }

    @Override
    public void setChannel(int channel) {
        this.channel = channel;
        System.out.println("Canal da TV definido para " + channel);
    }

    // Exemplo de método que utiliza o estado 'on'
    public boolean isOn() {
        return on;
    }

    // Exemplo de método que utiliza o estado 'channel'
    public int getCurrentChannel() {
        return channel;
    }
}
