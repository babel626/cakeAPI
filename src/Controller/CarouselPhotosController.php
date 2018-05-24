<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CarouselPhotos Controller
 *
 * @property \App\Model\Table\CarouselPhotosTable $CarouselPhotos
 *
 * @method \App\Model\Entity\CarouselPhoto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CarouselPhotosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $carouselPhotos = $this->paginate($this->CarouselPhotos);

        $this->set(compact('carouselPhotos'));
    }

    /**
     * View method
     *
     * @param string|null $id Carousel Photo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carouselPhoto = $this->CarouselPhotos->get($id, [
            'contain' => []
        ]);

        $this->set('carouselPhoto', $carouselPhoto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carouselPhoto = $this->CarouselPhotos->newEntity();
        if ($this->request->is('post')) {
            $carouselPhoto = $this->CarouselPhotos->patchEntity($carouselPhoto, $this->request->getData());
            if ($this->CarouselPhotos->save($carouselPhoto)) {
                $this->Flash->success(__('The carousel photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carousel photo could not be saved. Please, try again.'));
        }
        $this->set(compact('carouselPhoto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Carousel Photo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carouselPhoto = $this->CarouselPhotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carouselPhoto = $this->CarouselPhotos->patchEntity($carouselPhoto, $this->request->getData());
            if ($this->CarouselPhotos->save($carouselPhoto)) {
                $this->Flash->success(__('The carousel photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carousel photo could not be saved. Please, try again.'));
        }
        $this->set(compact('carouselPhoto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Carousel Photo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carouselPhoto = $this->CarouselPhotos->get($id);
        if ($this->CarouselPhotos->delete($carouselPhoto)) {
            $this->Flash->success(__('The carousel photo has been deleted.'));
        } else {
            $this->Flash->error(__('The carousel photo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
