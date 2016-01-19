<?php
namespace NoughtsAndCrosses\NeuralNetwork;
use NoughtsAndCrosses\NeuralNetwork\Layer\LayerInterface;
use NoughtsAndCrosses\NeuralNetwork\Layer\InputLayerInterface;
use NoughtsAndCrosses\NeuralNetwork\Layer\HiddenLayerInterface;
use NoughtsAndCrosses\NeuralNetwork\Layer\OutputLayerInterface;
use stdClass;
use Exception;

/**
 * NeuralNetwork
 *
 * @package noughtsandcrosses
 */
class NeuralNetwork implements NeuralNetworkInterface
{

    /**
     * Input Layer.
     *
     */
    const INPUT_LAYER = 1;

    /**
     * Hidden Layer.
     *
     */
    const HIDDEN_LAYER = 2;

    /**
     * Output Layer.
     *
     */
    const OUTPUT_LAYER = 3;

    /**
     * @access protected
     * @var    obj
     */
    protected  $ann;

    /**
     * @access protected
     * @var    str
     */
    protected  $trainFile;

    /**
     * @access protected
     * @var    str
     */
    protected  $configurationFile;

    /**
     * @access protected
     * @var    array
     */
    protected  $layers = [
        'input'  => 1,
        'hidden' => 1,
        'output' => 1,
    ];

    /**
     * @access protected
     * @var    array
     */
    protected  $neurons = [
        'input'  => 1,
        'hidden' => 1,
        'output' => 1,
    ];

    /**
     * @access protected
     * @var    InputLayerInterface
     */
    protected  $inputLayer;

    /**
     * @access protected
     * @var    HiddenLayerInterface
     */
    protected  $hiddenLayer;

    /**
     * @access protected
     * @var    OutputLayerInterface
     */
    protected  $outputLayer;

    /**
     * Constructor.
     * 
     * @param array $container DI.
     */
    public function __construct($container = null)
    {
        # Set layers.
        if(!empty($container['layers']))
            $this->setLayers($container['layers']);

        # Set train file.
        if(!empty($container['train_file']))
            $this->setTrainFile($container['train_file']);

        # Set configuration file.
        if(!empty($container['configuration_file']))
            $this->setConfigurationFile($container['configuration_file']);

        # Set input layer.
        if(!empty($container['input_layer']))
            $this->setInputLayer($container['input_layer']);

        # Set hidden layer.
        if(!empty($container['hidden_layer']))
            $this->setHiddenLayer($container['hidden_layer']);

        # Set output layer.
        if(!empty($container['output_layer']))
            $this->setOutputLayer($container['output_layer']);

        # Create standard ann.
        if(!empty($container['create_standard']) 
            && $container['create_standard'] === true)
            $this->createStandard();

        # Activate hidden layer.
        if (!empty($container['activate_hidden_layer'])
            && $container['activate_hidden_layer'] === true)
            $this->setActivationFunction($this->getHiddenLayer());

        # Activate output layer.
        if (!empty($container['activate_output_layer'])
            && $container['activate_output_layer'] === true)
            $this->setActivationFunction($this->getOutputLayer());
    }

    /**
     * Create Standard.
     * 
     * @return bool
     */
    public function createStandard()
    {
        # Create standard fully connected backpropagation neural network.
        $this->ann = fann_create_standard(
            $this->getLayers(),
            $this->inputLayer->getNeurons(),
            $this->hiddenLayer->getNeurons(),
            $this->outputLayer->getNeurons());

        if($this->ann === false)
            return false;
        else
            return true;
    }

    /**
     * Set Activation Function.
     * 
     * @param  int  $layer Layer.
     * @return bool
     */
    public function setActivationFunction(LayerInterface $layer)
    {
        if($this->ann === null)
            throw new Exception(
                "ANN is null: create an artifical neural network before setting an activation function for a layer.", 
                1
            );
            
        $result = fann_set_activation_function_hidden($this->ann, 
                                                    $layer::ACTIVATION_FUNCTION);
        return $result;
    }

    /**
     * Train On File.
     * 
     * @param  int   $maxEpochs             The maximum number of epochs the training should continue.
     * @param  int   $epochsBetweenReports  The number of epochs between calling a user function.
     *                                      A value of zero means that user function is not called. 
     * @param  float $desiredError          The desired fann_get_MSE() or fann_get_bit_fail(), 
     *                                      depending on the stop function chosen by 
     *                                      fann_set_train_stop_function().
     * @return bool
     */
    public function trainOnFile($maxEpochs, $epochsBetweenReports, $desiredError)
    {
        $result = fann_train_on_file($this->ann, 
                                    $this->trainFile, 
                                    $maxEpochs, 
                                    $epochsBetweenReports, 
                                    $desiredError);
        return $result;
    }

    /**
     * Save. 
     * 
     * @return bool
     */
    public function save()
    {
        $result = fann_save($this->ann, $this->configurationFile);
        return $result;
    }
    /**
     * Get Train File.
     * 
     * @return str
     */
    public function getTrainFile()
    {
        return $this->trainFile;
    }

    /**
     * Set Train File.
     * 
     * @param  str  Path to the file containing train data.
     * @return bool
     *
     * @todo   Check if training file in the correct format.
     */
    public function setTrainFile($filename)
    {
        if(!is_file($filename))
            throw new Exception(
                "Train file not found: $filename.", 
                1
            );
        $this->trainFile = $filename;
        return true;
    }

    /**
     * Get Configuration file.
     * 
     * @return str
     */
    public function getConfigurationFile()
    {
        return $this->configurationFile;
    }

    /**
     * Set Configuration File.
     * 
     * @param  str  $filename Configuration file path.
     * @return bool
     */
    public function setConfigurationFile($filename)
    {
        $directory = dirname($filename);
        if(!is_dir($directory))
            throw new Exception(
                "Configuration file directory not found: $directory.", 
                1
            );
        $this->configurationFile = $filename;
        return true;
    }

    /**
     * Get Layers.
     * 
     * @return int
     */
    public function getLayers()
    {
        return $this->layers['input'] + $this->layers['hidden'] + $this->layers['output'];
    }

    /**
     * Set Layers.
     * 
     * @param  array $layers Array of layer types and number.
     * @return array
     */
    public function setLayers(array $layers)
    {
        $this->layers = $layers;
        return $this->layers;
    }

    /**
     * Get Input Layer.
     * 
     * @return InputLayerInterface
     */
    public function getInputLayer()
    {
    	return $this->inputLayer;
    }

    /**
     * Set Input Layer.
     * 
     * @param  InputLayerInterface $layer Input layer.
     * @return InputLayerInterface
     */
    public function setInputLayer(InputLayerInterface $layer)
    {
        $this->inputLayer = $layer;
        return $this->inputLayer;
    }

    /**
     * Get Hidden Layer.
     * 
     * @return HiddenLayerInterface
     */
    public function getHiddenLayer()
    {
        return $this->hiddenLayer;
    }

    /**
     * Set Hidden Layer.
     * 
     * @param  HiddenLayerInterface $layer Hidden layer.
     * @return HiddenLayerInterface
     */
    public function setHiddenLayer(HiddenLayerInterface $layer)
    {
        $this->hiddenLayer = $layer;
        return $this->hiddenLayer;
    }

    /**
     * Get Output Layer.
     * 
     * @return OutputLayerInterface
     */
    public function getOutputLayer()
    {
        return $this->outputLayer;
    }

    /**
     * Set Output Layer.
     * 
     * @param  OutputLayerInterface $layer Output layer.
     * @return OutputLayerInterface
     */
    public function setOutputLayer(OutputLayerInterface $layer)
    {
        $this->outputLayer = $layer;
        return $this->outputLayer;
    }

    /**
     * Destroy.
     *
     */
    public function destroy()
    {
        $result = fann_destroy($this->ann);
        return $result;
    }

    public function __destruct() {
        # Call destroy to properly free all the associated memory.
    }
}
